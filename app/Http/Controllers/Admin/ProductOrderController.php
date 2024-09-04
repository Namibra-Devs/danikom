<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductOrder;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PorductOrderExport;
use App\Models\PaymentGateway;
use App\Models\User;
use Carbon\Carbon;
use Session;

class ProductOrderController extends Controller
{
    public function all(Request $request)
    {
        $search = $request->search;
        $data['orders'] =
        ProductOrder::when($search, function ($query, $search) {
            return $query->where('order_number', $search);
        })
        ->orderBy('id', 'DESC')->paginate(10);

        return view('admin.product.order.index', $data);
    }

    public function pending(Request $request)
    {
        $search = $request->search;
        $data['orders'] = ProductOrder::
        when($search, function ($query, $search) {
            return $query->where('order_number', $search);
        })
        ->where('order_status', 'pending')->orderBy('id', 'DESC')->paginate(10);
        return view('admin.product.order.index', $data);
    }

    public function processing(Request $request)
    {
        $search = $request->search;
        $data['orders'] = ProductOrder::where('order_status', 'processing')
        ->when($search, function ($query, $search) {
            return $query->where('order_number', $search);
        })
        ->orderBy('id', 'DESC')->paginate(10);
        return view('admin.product.order.index', $data);
    }

    public function completed(Request $request)
    {
        $search = $request->search;
        $data['orders'] = ProductOrder::where('order_status', 'completed')->
        when($search, function ($query, $search) {
            return $query->where('order_number', $search);
        })
        ->orderBy('id', 'DESC')->paginate(10);
        return view('admin.product.order.index', $data);
    }

    public function rejected(Request $request)
    {
        $search = $request->search;
        $data['orders'] = ProductOrder::where('order_status', 'rejected')->
        when($search, function ($query, $search) {
            return $query->where('order_number', $search);
        })
        ->orderBy('id', 'DESC')->paginate(10);
        return view('admin.product.order.index', $data);
    }

    public function status(Request $request)
    {

        $po = ProductOrder::find($request->order_id);
        $po->order_status = $request->order_status;
        $po->save();

        $user = User::findOrFail($po->user_id);
        $sub = 'Order Status Update';

        $to = $user->email;
         // Send Mail to Buyer
         $mail = new PHPMailer(true);
             try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.namibra.io';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'testemail@namibra.io';
                $mail->Password   = 'testemail@123$+';
                $mail->SMTPSecure = 'ssl';
                $mail->Port       = '465';

                 //Recipients
                 $mail->setFrom('testemail@namibra.io', 'Danikom Trading');
                 $mail->addAddress($user->email, $user->fname);

                 // Content
                 $mail->isHTML(true);
                 $mail->Subject = $sub;
                 $mail->Body    = 'Hello <strong>' . $user->fname . '</strong>,<br/>Your order status is '.$request->order_status.'.<br/>Thank you.';
                 $mail->send();
             } catch (Exception $e) {
                 // die($e->getMessage());
             }


        Session::flash('success', 'Order status changed successfully!');
        return back();
    }

    public function details($id)
    {
        $order = ProductOrder::findOrFail($id);
        return view('admin.product.order.details',compact('order'));
    }


    public function bulkOrderDelete(Request $request)
    {
        $ids = $request->ids;

        foreach ($ids as $id) {
            $order = ProductOrder::findOrFail($id);
            @unlink('assets/frontend/invoices/product/'.$order->invoice_number);
            @unlink('assets/frontend/receipt/'.$order->receipt);
            foreach($order->orderitems as $item){
                $item->delete();
            }
            $order->delete();
        }

        Session::flash('success', 'Orders deleted successfully!');
        return "success";
    }

    public function orderDelete(Request $request)
    {
        $order = ProductOrder::findOrFail($request->order_id);
        @unlink('assets/frontend/invoices/product/'.$order->invoice_number);
        @unlink('assets/frontend/receipt/'.$order->receipt);
        foreach($order->orderitems as $item){
            $item->delete();
        }
        $order->delete();

        Session::flash('success', 'product order deleted successfully!');
        return back();
    }

    public function report(Request $request) {
        $fromDate = $request->from_date;
        $toDate = $request->to_date;
        $paymentStatus = $request->payment_status;
        $orderStatus = $request->order_status;
        $paymentMethod = $request->payment_method;

        if (!empty($fromDate) && !empty($toDate)) {
            $orders = ProductOrder::when($fromDate, function ($query, $fromDate) {
                return $query->whereDate('created_at', '>=', Carbon::parse($fromDate));
            })->when($toDate, function ($query, $toDate) {
                return $query->whereDate('created_at', '<=', Carbon::parse($toDate));
            })->when($paymentMethod, function ($query, $paymentMethod) {
                return $query->where('method', $paymentMethod);
            })->when($paymentStatus, function ($query, $paymentStatus) {
                return $query->where('payment_status', $paymentStatus);
            })->when($orderStatus, function ($query, $orderStatus) {
                return $query->where('order_status', $orderStatus);
            })->select('order_number','billing_fname','billing_email','billing_number','billing_city','billing_country','method','cart_total','discount','tax','total','created_at', 'payment_status', 'order_status')
            ->orderBy('id', 'DESC');

            Session::put('product_orders_report', $orders->get());
            $data['orders'] = $orders->paginate(10);
        } else {
            Session::put('product_orders_report', []);
            $data['orders'] = [];
        }

        $data['onPms'] = PaymentGateway::where('status', 1)->get();


        return view('admin.product.order.report', $data);
    }

    public function exportReport() {
        $orders = Session::get('product_orders_report');
        if (empty($orders) || count($orders) == 0) {
            Session::flash('warning', 'There are no orders to export');
            return back();
        }
        return Excel::download(new PorductOrderExport($orders), 'product-orders.csv');
    }
}
