<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BasicExtra;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\ShippingCharge;
use Auth;
use App\Models\Pcategory;
use Session;
use App\PaymentGateway;
use Carbon\Carbon;

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

        return view('frontend.product.cart', compact('cart'));
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
        $data['shippings'] = ShippingCharge::get();
        $data['paystackData'] = PaymentGateway::whereKeyword('paystack')->first();
        $data['paystack'] = $data['paystackData']->convertAutoData();
        $data['discount'] = session()->has('coupon') && !empty(session()->get('coupon')) ? session()->get('coupon') : 0;

        return view('frontend.product.checkout', $data);
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
        $bex = BasicExtra::first();

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
}
