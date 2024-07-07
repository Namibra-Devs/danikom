<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\BasicExtra;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Megamenu;
use App\Models\Pcategory;
use App\Models\ProductImage;
use App\Models\Product;
use App\Models\ProductOrder;
use Validator;
use Session;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $data['products'] = Product::orderBy('id', 'DESC')->get();
        return view('admin.product.index',$data);
    }


    public function create(Request $request)
    {
        $categories = Pcategory::where('status',1)->get();
        return view('admin.product.create', compact('categories'));
    }

    


    public function uploadUpdate(Request $request, $id)
    {
        $img = $request->file('file');
        $allowedExts = array('jpg', 'png', 'jpeg');

        $rules = [
            'file' => [
                function ($attribute, $value, $fail) use ($img, $allowedExts) {
                    if (!empty($img)) {
                        $ext = $img->getClientOriginalExtension();
                        if (!in_array($ext, $allowedExts)) {
                            return $fail("Only png, jpg, jpeg image is allowed");
                        }
                    }
                },
            ],
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $validator->getMessageBag()->add('error', 'true');
            return response()->json(['errors' => $validator->errors(), 'id' => 'slider']);
        }

        $product = Product::findOrFail($id);
        if ($request->hasFile('file')) {
            $filename = time() . '.' . $img->getClientOriginalExtension();
            $request->file('file')->move('assets/frontend/images/product/featured/', $filename);
            @unlink('assets/frontend/images/product/featured/' . $product->feature_image);
            $product->feature_image = $filename;
            $product->save();
        }

        return response()->json(['status' => "success", "image" => "Product image", 'product' => $product]);
    }


    public function getCategory()
    {
        $category = Pcategory::get();
        return $category;
    }


    public function store(Request $request)
    {
        $slug = make_slug($request->title);
        $sliders = !empty($request->slider) ? explode(',', $request->slider) : [];
        $featredImg = $request->featured_image;
        $extFeatured = pathinfo($featredImg, PATHINFO_EXTENSION);
        $allowedExts = array('jpg', 'png', 'jpeg');

        $rules = [];

        $rules = [
            'slider' => 'required',
            'title' => [
                'required',
                'max:255',
                function ($attribute, $value, $fail) use ($slug) {
                    $products = Product::all();
                    foreach ($products as $key => $product) {
                        if (strtolower($slug) == strtolower($product->slug)) {
                            $fail('The title field must be unique.');
                        }
                    }
                }
            ],
            'category_id' => 'required',
            'featured_image' => 'required',
            'status' => 'required'
        ];

            $rules['current_price'] = 'required|numeric';
            $rules['previous_price'] = 'nullable|numeric';

        if ($request->filled('slider')) {
            $rules['slider'] = [
                function ($attribute, $value, $fail) use ($sliders, $allowedExts) {
                    foreach ($sliders as $key => $slider) {
                        $extSlider = pathinfo($slider, PATHINFO_EXTENSION);
                        if (!in_array($extSlider, $allowedExts)) {
                            return $fail("Only png, jpg, jpeg images are allowed");
                        }
                    }
                }
            ];
        }

        if ($request->filled('featured_image')) {
            $rules['featured_image'] = [
                function ($attribute, $value, $fail) use ($extFeatured, $allowedExts) {
                    if (!in_array($extFeatured, $allowedExts)) {
                        return $fail("Only png, jpg, jpeg image is allowed");
                    }
                }
            ];
        }

            $rules['stock'] = 'required';
            $rules['sku'] = 'required|unique:products';

        $messages = [
            'category_id.required' => 'Category is required'
        ];


        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $errmsgs = $validator->getMessageBag()->add('error', 'true');
            return response()->json($validator->errors());
        }

        $in = $request->all();
        $in['slug'] = $slug;

        // store featured image
        $filename = uniqid() .'.'. $extFeatured;
        @copy($featredImg, 'assets/frontend/images/product/featured/' . $filename);
        $in['feature_image'] = $filename;

            $in['stock'] = $request->stock;
            $in['sku'] = $request->sku;

        $in['description'] = str_replace(url('/') . '/assets/frontend/images/', "{base_url}/assets/frontend/images/", $request->description);

        $product = Product::create($in);

        foreach ($sliders as $key => $slider) {
            $extSlider = pathinfo($slider, PATHINFO_EXTENSION);
            $filename = uniqid() .'.'. $extSlider;
            @copy($slider, 'assets/frontend/images/product/sliders/' . $filename);

            $pi = new ProductImage;
            $pi->product_id = $product->id;
            $pi->image = $filename;
            $pi->save();
        }

        Session::flash('success', 'Product added successfully!');
        return "success";
    }


    public function edit(Request $request, $id)
    {
        $categories = Pcategory::where('status',1)->get();
        $data = Product::findOrFail($id);
        return view('admin.product.edit',compact('categories','data'));
    }

    public function images($portid)
    {
        $images = ProductImage::select('image')->where('product_id', $portid)->get();
        $convImages = [];

        foreach ($images as $key => $image) {
            $convImages[] = url("assets/frontend/images/product/sliders/$image->image");
        }

        return $convImages;
    }

    public function update(Request $request)
    {
        $slug = make_slug($request->title);
        $product = Product::findOrFail($request->product_id);
        $productId = $product->id;

        $sliders = !empty($request->slider) ? explode(',', $request->slider) : [];
        $featredImg = $request->featured_image;
        $extFeatured = pathinfo($featredImg, PATHINFO_EXTENSION);
        $allowedExts = array('jpg', 'png', 'jpeg');

        $rules = [
            'slider' => 'required',
            'title' => [
                'required',
                'max:255',
                function ($attribute, $value, $fail) use ($slug, $productId) {
                    $products = Product::all();
                    foreach ($products as $key => $product) {
                        if ($product->id != $productId && strtolower($slug) == strtolower($product->slug)) {
                            $fail('The title field must be unique.');
                        }
                    }
                }
            ],
            'category_id' => 'required',
            'status' => 'required'
        ];


            $rules['current_price'] = 'required|numeric';
            $rules['previous_price'] = 'nullable|numeric';

        if ($request->filled('slider')) {
            $rules['slider'] = [
                function ($attribute, $value, $fail) use ($sliders, $allowedExts) {
                    foreach ($sliders as $key => $slider) {
                        $extSlider = pathinfo($slider, PATHINFO_EXTENSION);
                        if (!in_array($extSlider, $allowedExts)) {
                            return $fail("Only png, jpg, jpeg images are allowed");
                        }
                    }
                }
            ];
        }

        if ($request->filled('featured_image')) {
            $rules['featured_image'] = [
                function ($attribute, $value, $fail) use ($extFeatured, $allowedExts) {
                    if (!in_array($extFeatured, $allowedExts)) {
                        return $fail("Only png, jpg, jpeg image is allowed");
                    }
                }
            ];
        }

       

        $messages = [
            'category_id.required' => 'Service is required',
            'description.min' => 'Description is required'
        ];



        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $errmsgs = $validator->getMessageBag()->add('error', 'true');
            return response()->json($validator->errors());
        }

        $in = $request->all();
        $in['slug'] = $slug;

        // if the type is digital && 'link' method is selected, then store the downloadable file
        if ($product->type == 'digital' && $request->file_type == 'link') {
            @unlink('core/storage/digital_products/' . $product->download_file);
            $in['download_file'] = NULL;
        }

        // if the type is digital && 'upload file' method is selected, then store the downloadable file
        if ($product->type == 'digital' && $request->file_type == 'upload') {
            if ($request->hasFile('download_file')) {
                @unlink('core/storage/digital_products/' . $product->download_file);

                $digitalFile = $request->file('download_file');
                $filename = $slug . '-' . uniqid() . "." . $digitalFile->extension();
                $directory = 'core/storage/digital_products/';
                @mkdir($directory, 0775, true);
                $digitalFile->move($directory, $filename);

                $in['download_file'] = $filename;
                $in['download_link'] = NULL;
            }
        }
        $in['description'] = str_replace(url('/') . '/assets/frontend/images/', "{base_url}/assets/frontend/images/", $request->description);

        // update featured image
        if ($request->filled('featured_image')) {
            @unlink('assets/frontend/images/product/featured/' . $product->feature_image);
            $filename = uniqid() .'.'. $extFeatured;
            @copy($featredImg, 'assets/frontend/images/product/featured/' . $filename);
            $in['feature_image'] = $filename;
        }

        $product->fill($in)->save();

        // copy the sliders first
        $fileNames = [];
        foreach ($sliders as $key => $slider) {
            $extSlider = pathinfo($slider, PATHINFO_EXTENSION);
            $filename = uniqid() .'.'. $extSlider;
            @copy($slider, 'assets/frontend/images/product/sliders/' . $filename);
            $fileNames[] = $filename;
        }

        // delete & unlink previous slider images
        $pis = ProductImage::where('product_id', $product->id)->get();
        foreach ($pis as $key => $pi) {
            @unlink('assets/frontend/images/product/sliders/' . $pi->image);
            $pi->delete();
        }

        // store new slider images
        foreach ($fileNames as $key => $fileName) {
            $pi = new ProductImage;
            $pi->product_id = $product->id;
            $pi->image = $fileName;
            $pi->save();
        }

        Session::flash('success', 'Product updated successfully!');
        return "success";
    }


    public function deleteFromMegaMenu($product) {
        // unset service from megamenu for service_category = 1
        $megamenu = Megamenu::where('category', 1)->where('type', 'products');
        if ($megamenu->count() > 0) {
            $megamenu = $megamenu->first();
            $menus = json_decode($megamenu->menus, true);
            $catId = $product->category->id;
            if (is_array($menus) && array_key_exists("$catId", $menus)) {
                if (in_array($product->id, $menus["$catId"])) {
                    $index = array_search($product->id, $menus["$catId"]);
                    unset($menus["$catId"]["$index"]);
                    $menus["$catId"] = array_values($menus["$catId"]);
                    if (count($menus["$catId"]) == 0) {
                        unset($menus["$catId"]);
                    }
                    $megamenu->menus = json_encode($menus);
                    $megamenu->save();
                }
            }
        }
    }


    public function feature(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $product->is_feature = $request->is_feature;
        $product->save();

        if ($request->is_feature == 1) {
            Session::flash('success', 'Product featured successfully!');
        } else {
            Session::flash('success', 'Product unfeatured successfully!');
        }
        return back();
    }


    public function delete(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        foreach ($product->product_images as $key => $pi) {
            @unlink('assets/frontend/images/product/sliders/' . $pi->image);
            $pi->delete();
        }

        @unlink('assets/frontend/images/product/featured/' . $product->feature_image);
        @unlink('core/storage/digital_products/' . $product->download_file);

        $this->deleteFromMegaMenu($product);

        $product->delete();

        Session::flash('success', 'Product deleted successfully!');
        return back();
    }


    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;

        foreach ($ids as $id) {
            $product = Product::findOrFail($id);
            foreach ($product->product_images as $key => $pi) {
                @unlink('assets/frontend/images/product/sliders/' . $pi->image);
                $pi->delete();
            }
        }

        foreach ($ids as $id) {
            $product = product::findOrFail($id);
            @unlink('assets/frontend/images/product/featured/' . $product->feature_image);

            $this->deleteFromMegaMenu($product);

            $product->delete();
        }

        Session::flash('success', 'Product deleted successfully!');
        return "success";
    }


    public function populerTag(Request $request)
    {

        $data = BE::first();
        return view('admin.product.tag.index',compact('data'));
    }

    public function populerTagupdate(Request $request)
    {
        $rules = [
            'popular_tags' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $errmsgs = $validator->getMessageBag()->add('error', 'true');
            return response()->json($validator->errors());
        }

        $be->popular_tags = $request->popular_tags;
        $be->save();
        Session::flash('success', 'Populer tags update successfully!');
        return "success";
    }

    
    public function paymentStatus(Request $request) {
        $order = ProductOrder::find($request->order_id);
        $order->payment_status = $request->payment_status;
        $order->save();

        // $user = User::findOrFail($po->user_id);
        $be = BE::first();
        $sub = 'Payment Status Updated';

        $to = $order->billing_email;
        $fname = $order->billing_fname;

         // Send Mail to Buyer
         $mail = new PHPMailer(true);
         if ($be->is_smtp == 1) {
             try {
                 $mail->isSMTP();
                 $mail->Host       = $be->smtp_host;
                 $mail->SMTPAuth   = true;
                 $mail->Username   = $be->smtp_username;
                 $mail->Password   = $be->smtp_password;
                 $mail->SMTPSecure = $be->encryption;
                 $mail->Port       = $be->smtp_port;

                 //Recipients
                 $mail->setFrom($be->from_mail, $be->from_name);
                 $mail->addAddress($to, $fname);

                 // Content
                 $mail->isHTML(true);
                 $mail->Subject = $sub;
                 $mail->Body    = 'Hello <strong>' . $fname . '</strong>,<br/>Your payment status is changed to '.$request->payment_status.'.<br/>Thank you.';
                 $mail->send();
             } catch (Exception $e) {
                 // die($e->getMessage());
             }
         } else {
             try {

                 //Recipients
                 $mail->setFrom($be->from_mail, $be->from_name);
                 $mail->addAddress($to, $fname);


                 // Content
                 $mail->isHTML(true);
                 $mail->Subject = $sub ;
                 $mail->Body    = 'Hello <strong>' . $fname . '</strong>,<br/>Your payment status is changed to '.$request->payment_status.'.<br/>Thank you.';

                 $mail->send();
             } catch (Exception $e) {
                 // die($e->getMessage());
             }
         }

        Session::flash('success', 'Payment Status updated!');
        return back();
    }
}
