<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helpers\KreativMailer;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\ShippingCharge;
use Auth;
use PDF;
use App\Models\Pcategory;
use Session;
use App\Models\PaymentGateway;
use Carbon\Carbon;
use App\Models\ProductOrder;
use App\Models\OrderItem;

class ProductController extends Controller
{
    public function product(Request $request)
    {

        $data['categories'] = Pcategory::where('status', 1)->get();

        $search = $request->search;
        $minprice = $request->minprice;
        $maxprice = $request->maxprice;
        $category = $request->category_id;
        $tag = $request->tag;

        if ($request->type) {
            $type = $request->type;
        } else {
            $type = 'new';
        }
        $tag = $request->tag;
        $review = $request->review;

        $data['products'] =
            Product::when($category, function ($query, $category) {
                return $query->where('category_id', $category);
            })
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%');
            })
            ->when($minprice, function ($query, $minprice) {
                return $query->where('current_price', '>=', $minprice);
            })
            ->when($maxprice, function ($query, $maxprice) {
                return $query->where('current_price', '<=', $maxprice);
            })
            ->when($tag, function ($query, $tag) {
                return $query->where('tags', 'like', '%' . $tag . '%');
            })
            ->when($review, function ($query, $review) {
                return $query->where('rating', '>=', $review);
            })
            ->when($type, function ($query, $type) {
                if ($type == 'new') {
                    return $query->orderBy('id', 'DESC');
                } elseif ($type == 'old') {
                    return $query->orderBy('id', 'ASC');
                } elseif ($type == 'high-to-low') {
                    return $query->orderBy('current_price', 'DESC');
                } elseif ($type == 'low-to-high') {
                    return $query->orderBy('current_price', 'ASC');
                }
            })

            ->where('status', 1)->paginate(9);

        return view('frontend.pages.product.product', $data);
    }

    public function productDetails($slug)
    {

        Session::put('link', url()->current());
        $data['product'] = Product::where('slug', $slug)->first();
        $data['categories'] = Pcategory::where('status', 1)->get();

        $data['related_product'] = Product::where('category_id', $data['product']->category_id)->where('id', '!=', $data['product']->id)->get();

        return view('frontend.pages.product.details', $data);
    }

    public function cart()
    {

        if (Session::has('cart')) {
            $cart = Session::get('cart');
        } else {
            $cart = null;
        }

        return view('frontend.pages.product.cart', compact('cart'));
    }

    public function addToCart($id)
    {

        $cart = Session::get('cart');

        if (strpos($id, ',,,') == true) {
            $data = explode(',,,', $id);
            $id = $data[0];
            $qty = $data[1];
            $size = $data[2];

            $product = Product::findOrFail($id);

            if (!empty($cart) && array_key_exists($id, $cart)) {
                if ($product->stock < $cart[$id]['qty'] + $qty) {
                    return response()->json(['error' => 'Out of Stock']);
                }
            } else {
                if ($product->stock < $qty) {
                    return response()->json(['error' => 'Out of Stock']);
                }
            }

            if (!$product) {
                abort(404);
            }
            $cart = Session::get('cart');
            // if cart is empty then this the first product
            if (!$cart) {

                $cart = [
                    $id => [
                        "name" => $product->title,
                        "qty" => $qty,
                        "price" => $product->current_price,
                        "photo" => $product->feature_image,
                        "type" => $product->type,
                        "size" => '$size'
                    ]
                ];

                Session::put('cart', $cart);
                return response()->json(['message' => 'Product added to cart successfully!']);
            }


            // if cart not empty then check if this product exist then increment quantity
            if (isset($cart[$id])) {
                $cart[$id]['qty'] +=  $qty;
                Session::put('cart', $cart);
                return response()->json(['message' => 'Product added to cart successfully!']);
            }

            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                "name" => $product->title,
                "qty" => $qty,
                "price" => $product->current_price,
                "photo" => $product->feature_image,
                "type" => $product->type,
                "size" => '$size'
            ];
        } else {

            $id = $id;
            $product = Product::findOrFail($id);
            if (!$product) {
                abort(404);
            }

            if ($product->type != 'digital') {
                if (!empty($cart) && array_key_exists($id, $cart)) {
                    if ($product->stock < $cart[$id]['qty'] + 1) {
                        return response()->json(['error' => 'Out of Stock']);
                    }
                } else {
                    if ($product->stock < 1) {
                        return response()->json(['error' => 'Out of Stock']);
                    }
                }
            }


            $cart = Session::get('cart');
            // if cart is empty then this the first product
            if (!$cart) {

                $cart = [
                    $id => [
                        "name" => $product->title,
                        "qty" => 1,
                        "price" => $product->current_price,
                        "photo" => $product->feature_image,
                        "type" => $product->type,
                        "size" => "L"
                    ]
                ];

                Session::put('cart', $cart);
                return response()->json(['message' => 'Product added to cart successfully!']);
            }

            // if cart not empty then check if this product exist then increment quantity
            if (isset($cart[$id])) {
                $cart[$id]['qty']++;
                Session::put('cart', $cart);
                return response()->json(['message' => 'Product added to cart successfully!']);
            }

            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                "name" => $product->title,
                "qty" => 1,
                "price" => $product->current_price,
                "photo" => $product->feature_image,
                "type" => $product->type,
                "size" => "L"
            ];
        }

        Session::put('cart', $cart);
        return response()->json(['message' => 'Product added to cart successfully!']);
    }


    public function updatecart(Request $request)
    {
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            foreach ($request->product_id as $key => $id) {
                $product = Product::findOrFail($id);
                if ($product->stock < $request->qty[$key]) {
                    return response()->json(['error' => $product->title . ' stock not available']);
                }
                if (isset($cart[$id])) {
                    $cart[$id]['qty'] =  $request->qty[$key];
                    Session::put('cart', $cart);
                }
            }
        }
        $total = 0;
        $count = 0;
        foreach ($cart as $i) {
            $total += $i['price'] * $i['qty'];
            $count += $i['qty'];
        }

        $total = round($total, 2);

        return response()->json(['message' => 'Cart Update Successfully.', 'total' => $total, 'count' => $count]);
    }


    public function cartitemremove($id)
    {
        if ($id) {
            $cart = Session::get('cart');
            if (isset($cart[$id])) {
                unset($cart[$id]);
                Session::put('cart', $cart);
            }

            $total = 0;
            $count = 0;
            foreach ($cart as $i) {
                $total += $i['price'] * $i['qty'];
                $count += $i['qty'];
            }
            $total = round($total, 2);

            return response()->json(['message' => 'Product removed successfully', 'count' => $count, 'total' => $total]);
        }
    }


    public function checkout(Request $request)
    {

        if (!Auth::check()) {
            if ($request->type != 'guest') {
                Session::put('link', route('frontend.checkout'));
                return redirect(route('user.login', ['redirected' => 'checkout']));
            }
        }


        if (!Session::get('cart')) {
            Session::flash('error', 'Your cart is empty.');
            return back();
        }


        if (Session::has('cart')) {
            $data['cart'] = Session::get('cart');
        } else {
            $data['cart'] = null;
        }
        // $data['shippings'] = ShippingCharge::get();
        // $data['paystackData'] = PaymentGateway::whereKeyword('paystack')->first();
        // $data['paystack'] = $data['paystackData']->convertAutoData();
        $data['discount'] = session()->has('coupon') && !empty(session()->get('coupon')) ? session()->get('coupon') : 0;

        return view('frontend.pages.product.checkout', $data);
    }


    public function Productcheckout(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        if (!$product) {
            abort(404);
        }

        if ($request->choice_1) {
            $size = $request->choice_1;
        } else {
            $size = "L";
        }

        if ($request->qty) {
            $qty = $request->qty;
        } else {
            $qty = 1;
        }


        $cart = Session::get('cart');
        $id = $product->id;
        // if cart is empty then this the first product
        if (!($cart)) {
            if ($product->type != 'digital' && $product->stock <  $qty) {
                Session::flash('error', 'Out of stock');
                return back();
            }

            $cart = [
                $id => [
                    "name" => $product->title,
                    "qty" => $qty,
                    "price" => $product->current_price,
                    "photo" => $product->feature_image,
                    'type' => $product->type,
                    'size' => $size,
                ]
            ];

            Session::put('cart', $cart);
            if (!Auth::user()) {
                Session::put('link', url()->current());
                return redirect(route('user.login'));
            }
            return redirect(route('frontend.checkout'));
        }


        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            if ($product->type != 'digital' && $product->stock < $cart[$id]['qty'] + $qty) {
                Session::flash('error', 'Out of stock');
                return back();
            }
            $qt = $cart[$id]['qty'];
            $cart[$id]['qty'] = $qt + $qty;

            Session::put('cart', $cart);
            if (!Auth::user()) {
                Session::put('link', url()->current());
                return redirect(route('user.login'));
            }
            return redirect(route('frontend.checkout'));
        }

        if ($product->type != 'digital' && $product->stock <  $qty) {
            Session::flash('error', 'Out of stock');
            return back();
        }


        $cart[$id] = [
            "name" => $product->title,
            "qty" => $qty,
            "price" => $product->current_price,
            "photo" => $product->feature_image,
            'type' => $product->type,
            'size' => $size
        ];
        Session::put('cart', $cart);



        if (!Auth::user()) {
            Session::put('link', url()->current());
            return redirect(route('user.login'));
        }
        return redirect(route('frontend.checkout'));
    }

    public function coupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon);

        if ($coupon->count() == 0) {
            return response()->json(['status' => 'error', 'message' => "Coupon is not valid"]);
        } else {
            $coupon = $coupon->first();
            if (cartTotal() < $coupon->minimum_spend) {
                return response()->json(['status' => 'error', 'message' => "Cart Total must be minimum " . $coupon->minimum_spend . " " . $bex->base_currency_text]);
            }
            $start = Carbon::parse($coupon->start_date);
            $end = Carbon::parse($coupon->end_date);
            $today = Carbon::now();
            // return response()->json($end->lessThan($today));

            // if coupon is active
            if ($today->greaterThanOrEqualTo($start) && $today->lessThan($end)) {
                $cartTotal = cartTotal();
                $value = $coupon->value;
                $type = $coupon->type;

                if ($type == 'fixed') {
                    if ($value > cartTotal()) {
                        return response()->json(['status' => 'error', 'message' => "Coupon discount is greater than cart total"]);
                    }
                    $couponAmount = $value;
                } else {
                    $couponAmount = ($cartTotal * $value) / 100;
                }
                session()->put('coupon', round($couponAmount, 2));

                return response()->json(['status' => 'success', 'message' => "Coupon applied successfully"]);
            } else {
                return response()->json(['status' => 'error', 'message' => "Coupon is not valid"]);
            }
        }
    }

    public function payreturn()
    {
        return view('frontend.product.success');
    }

    public function orderValidation($request, $gtype = 'online') {
        $rules = [
            'billing_fname' => 'required',
            'billing_lname' => 'required',
            'billing_address' => 'required',
            'billing_city' => 'required',
            'billing_country' => 'required',
            'billing_number' => 'required',
            'billing_email' => 'required',
            'shpping_fname' => 'required',
            'shpping_lname' => 'required',
            'shpping_address' => 'required',
            'shpping_city' => 'required',
            'shpping_country' => 'required',
            'shpping_number' => 'required',
            'shpping_email' => 'required',
        ];

        $request->validate($rules);
    }

    public function orderTotal() {

        $total = round(cartTotal() , 2);
        // $total = round(cartTotal() - $this->coupon() , 2);

        return round($total, 2);
    }

    public function saveOrder($request, $txnId, $chargeId, $paymentStatus = 'Pending', $gtype = 'online') {

        $total = $this->orderTotal();

            $shippig_charge = 0;
            $shipping_method = NULL;

        $order = new ProductOrder;


        $order->billing_fname = $request['billing_fname'];
        $order->billing_lname = $request['billing_lname'];
        $order->billing_email = $request['billing_email'];
        $order->billing_address = $request['billing_address'];
        $order->billing_city = $request['billing_city'];
        $order->billing_country = $request['billing_country'];
        $order->billing_number = $request['billing_number'];
        $order->shpping_fname = $request['shpping_fname'];
        $order->shpping_lname = $request['shpping_lname'];
        $order->shpping_email = $request['shpping_email'];
        $order->shpping_address = $request['shpping_address'];
        $order->shpping_city = $request['shpping_city'];
        $order->shpping_country = $request['shpping_country'];
        $order->shpping_number = $request['shpping_number'];
        $order->gateway_type = $gtype;


        $order->cart_total = cartTotal();
        // $order->tax = tax();
        $order->total = $total;
        $order['order_number'] = \Str::random(4) . time();
        $order['payment_status'] = $paymentStatus;
        $order['txnid'] = $txnId;
        $order['charge_id'] = $chargeId;
        $order['user_id'] = Auth::check() ? Auth::user()->id : NULL;



        $order->save();

        return $order;
    }


    public function saveOrderedItems($orderId) {
        $cart = Session::get('cart');
        $products = [];
        $qty = [];
        foreach ($cart as $id => $item) {
            $qty[] = $item['qty'];
            $products[] = Product::findOrFail($id);
        }



        foreach ($products as $key => $product) {
            if (!empty($product->category)) {
                $category = $product->category->name;
            } else {
                $category = '';
            }
            OrderItem::insert([
                'product_order_id' => $orderId,
                'product_id' => $product->id,
                'user_id' => Auth::check() ? Auth::user()->id : NULL,
                'title' => $product->title,
                'sku' => $product->sku,
                'qty' => $qty[$key],
                'category' => $category,
                'price' => $product->current_price,
                'previous_price' => $product->previous_price,
                'image' => $product->feature_image,
                'summary' => $product->summary,
                'description' => $product->description,
                'created_at' => Carbon::now(),
            ]);
        }

        foreach ($cart as $id => $item) {
            $product = Product::findOrFail($id);
            $stock = $product->stock - $item['qty'];
            Product::where('id', $id)->update([
                'stock' => $stock
            ]);
        }
    }

    public function sendMails($order) {

        $fileName = \Str::random(4) . time() . '.pdf';
        $path = 'assets/frontend/invoices/product/' . $fileName;
        $data['order']  = $order;
        $pdf = PDF::loadView('pdf.product', $data)->save($path);


        ProductOrder::where('id', $order->id)->update([
            'invoice_number' => $fileName
        ]);

        // Send Mail to Buyer
        $mailer = new KreativMailer;
        $data = [
            'toMail' => $order->billing_email,
            'toName' => $order->billing_fname,
            'attachment' => $fileName,
            'customer_name' => $order->billing_fname,
            'order_number' => $order->order_number,
            'order_link' => !empty($order->user_id) ? "<strong>Order Details:</strong> <a href='" . route('user-orders-details',$order->id) . "'>" . route('user-orders-details',$order->id) . "</a>" : "",
            'website_title' => 'Danikom Trading',
            'templateType' => 'product_order',
            'type' => 'productOrder'
        ];

        $mailer->mailFromAdmin($data);

        Session::forget('cart');
        Session::forget('coupon');
    }

    public function placeorder(Request $request)
    {
        if (!Session::has('cart')) {
            return view('errors.404');
        }

        if ($this->orderValidation($request)) {
            return $this->orderValidation($request);
        }


        $txnId = 'txn_' . \Str::random(8) . time();
        $chargeId = 'ch_' . \Str::random(9) . time();
        $order = $this->saveOrder($request, $txnId, $chargeId, "Pending");
        $order_id = $order->id;

        $this->saveOrderedItems($order_id);


        $this->sendMails($order);

        return view('frontend.pages.product.success');
    }

    
    
}
