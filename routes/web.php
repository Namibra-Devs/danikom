<?php

use Illuminate\Support\Facades\Route;
use App\Models\Permalink;


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth:admin', 'setLfmPath']], function () {
  \UniSharp\LaravelFilemanager\Lfm::routes();
  Route::post('summernote/upload', 'App\Http\Controllers\Admin\SummernoteController@uploadFileManager')->name('lfm.summernote.upload');
});

/*=======================================================
******************** Admin Routes **********************
=======================================================*/

Route::group(['prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
  Route::post('/login', 'App\Http\Controllers\Admin\LoginController@authenticate')->name('admin.auth');

  Route::get('/mail-form', 'App\Http\Controllers\Admin\ForgetController@mailForm')->name('admin.forget.form');
  Route::post('/sendmail', 'App\Http\Controllers\Admin\ForgetController@sendmail')->name('admin.forget.mail');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin', 'checkstatus']], function () {

  // Admin logout Route
  Route::get('/logout', 'App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');

  // Summernote image upload
  Route::post('/summernote/upload', 'App\Http\Controllers\Admin\SummernoteController@upload')->name('admin.summernote.upload');

  // Admin File Manager Routes
  Route::get('/file-manager', 'App\Http\Controllers\Admin\SummernoteController@fileManager')->name('admin.file-manager');

  Route::group(['middleware' => 'checkpermission:Dashboard'], function () {
    // Admin Dashboard Routes
    Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@dashboard')->name('admin.dashboard');
  });

  // Admin Profile Routes
  Route::get('/changePassword', 'App\Http\Controllers\Admin\ProfileController@changePass')->name('admin.changePass');
  Route::post('/profile/updatePassword', 'App\Http\Controllers\Admin\ProfileController@updatePassword')->name('admin.updatePassword');
  Route::get('/profile/edit', 'App\Http\Controllers\Admin\ProfileController@editProfile')->name('admin.editProfile');
  Route::post('/propic/update', 'App\Http\Controllers\Admin\ProfileController@updatePropic')->name('admin.propic.update');
  Route::post('/profile/update', 'App\Http\Controllers\Admin\ProfileController@updateProfile')->name('admin.updateProfile');

  Route::group(['middleware' => 'checkpermission:Users Management'], function () {
    // Register User start
    Route::get('register/users', 'App\Http\Controllers\Admin\RegisterUserController@index')->name('admin.register.user');
    Route::post('register/users/ban', 'App\Http\Controllers\Admin\RegisterUserController@userban')->name('register.user.ban');
    Route::post('register/users/email', 'App\Http\Controllers\Admin\RegisterUserController@emailStatus')->name('register.user.email');
    Route::get('register/user/details/{id}', 'App\Http\Controllers\Admin\RegisterUserController@view')->name('register.user.view');
    Route::post('register/user/delete', 'App\Http\Controllers\Admin\RegisterUserController@delete')->name('register.user.delete');
    Route::post('register/user/bulk-delete', 'App\Http\Controllers\Admin\RegisterUserController@bulkDelete')->name('register.user.bulk.delete');
    Route::get('register/user/{id}/changePassword', 'App\Http\Controllers\Admin\RegisterUserController@changePass')->name('register.user.changePass');
    Route::post('register/user/updatePassword', 'App\Http\Controllers\Admin\RegisterUserController@updatePassword')->name('register.user.updatePassword');
    //Register User end

  });

  Route::group(['middleware' => 'checkpermission:Role Management'], function () {
    // Admin Roles Routes
    Route::get('/roles', 'App\Http\Controllers\Admin\RoleController@index')->name('admin.role.index');
    Route::post('/role/store', 'App\Http\Controllers\Admin\RoleController@store')->name('admin.role.store');
    Route::post('/role/update', 'App\Http\Controllers\Admin\RoleController@update')->name('admin.role.update');
    Route::post('/role/delete', 'App\Http\Controllers\Admin\RoleController@delete')->name('admin.role.delete');
    Route::get('role/{id}/permissions/manage', 'App\Http\Controllers\Admin\RoleController@managePermissions')->name('admin.role.permissions.manage');
    Route::post('role/permissions/update', 'App\Http\Controllers\Admin\RoleController@updatePermissions')->name('admin.role.permissions.update');
  });

  Route::group(['middleware' => 'checkpermission:Users Management'], function () {
    // Admin Users Routes
    Route::get('/users', 'App\Http\Controllers\Admin\UserController@index')->name('admin.user.index');
    Route::post('/user/store', 'App\Http\Controllers\Admin\UserController@store')->name('admin.user.store');
    Route::get('/user/{id}/edit', 'App\Http\Controllers\Admin\UserController@edit')->name('admin.user.edit');
    Route::post('/user/update', 'App\Http\Controllers\Admin\UserController@update')->name('admin.user.update');
    Route::post('/user/delete', 'App\Http\Controllers\Admin\UserController@delete')->name('admin.user.delete');
  });

    // Admin Product Management Routes
    Route::group(['middleware' => 'checkpermission:Shop Management'], function () {
      Route::get('/category', 'App\Http\Controllers\Admin\ProductCategory@index')->name('admin.category.index');
      Route::post('/category/store', 'App\Http\Controllers\Admin\ProductCategory@store')->name('admin.category.store');
      Route::get('/category/{id}/edit', 'App\Http\Controllers\Admin\ProductCategory@edit')->name('admin.category.edit');
      Route::post('/category/update', 'App\Http\Controllers\Admin\ProductCategory@update')->name('admin.category.update');
      Route::post('/category/feature', 'App\Http\Controllers\Admin\ProductCategory@feature')->name('admin.category.feature');
      Route::post('/category/home', 'App\Http\Controllers\Admin\ProductCategory@home')->name('admin.category.home');
      Route::post('/category/delete', 'App\Http\Controllers\Admin\ProductCategory@delete')->name('admin.category.delete');
      Route::post('/category/bulk-delete', 'App\Http\Controllers\Admin\ProductCategory@bulkDelete')->name('admin.pcategory.bulk.delete');
  
      Route::get('/shipping', 'App\Http\Controllers\Admin\ShopSettingController@index')->name('admin.shipping.index');
      Route::post('/shipping/store', 'App\Http\Controllers\Admin\ShopSettingController@store')->name('admin.shipping.store');
      Route::get('/shipping/{id}/edit', 'App\Http\Controllers\Admin\ShopSettingController@edit')->name('admin.shipping.edit');
      Route::post('/shipping/update', 'App\Http\Controllers\Admin\ShopSettingController@update')->name('admin.shipping.update');
      Route::post('/shipping/delete', 'App\Http\Controllers\Admin\ShopSettingController@delete')->name('admin.shipping.delete');
  
      Route::get('/product', 'App\Http\Controllers\Admin\ProductController@index')->name('admin.product.index');
      Route::get('/product/create', 'App\Http\Controllers\Admin\ProductController@create')->name('admin.product.create');
      Route::post('/product/store', 'App\Http\Controllers\Admin\ProductController@store')->name('admin.product.store');
      Route::get('/product/{id}/edit', 'App\Http\Controllers\Admin\ProductController@edit')->name('admin.product.edit');
      Route::post('/product/update', 'App\Http\Controllers\Admin\ProductController@update')->name('admin.product.update');
      Route::post('/product/feature', 'App\Http\Controllers\Admin\ProductController@feature')->name('admin.product.feature');
      Route::post('/product/delete', 'App\Http\Controllers\Admin\ProductController@delete')->name('admin.product.delete');
      Route::get('/product/populer/tags/', 'App\Http\Controllers\Admin\ProductController@populerTag')->name('admin.product.tags');
      Route::post('/product/populer/tags/update', 'App\Http\Controllers\Admin\ProductController@populerTagupdate')->name('admin.popular-tag.update');
      Route::post('/product/paymentStatus', 'App\Http\Controllers\Admin\ProductController@paymentStatus')->name('admin.product.paymentStatus');
  
      Route::get('product/{id}/getcategory', 'App\Http\Controllers\Admin\ProductController@getCategory')->name('admin.product.getcategory');
      Route::post('/product/delete', 'App\Http\Controllers\Admin\ProductController@delete')->name('admin.product.delete');
      Route::post('/product/bulk-delete', 'App\Http\Controllers\Admin\ProductController@bulkDelete')->name('admin.product.bulk.delete');
      Route::post('/product/sliderupdate', 'App\Http\Controllers\Admin\ProductController@sliderupdate')->name('admin.product.sliderupdate');
      Route::post('/product/{id}/uploadUpdate', 'App\Http\Controllers\Admin\ProductController@uploadUpdate')->name('admin.product.uploadUpdate');
      Route::post('/product/update', 'App\Http\Controllers\Admin\ProductController@update')->name('admin.product.update');
      Route::get('/product/{id}/images', 'App\Http\Controllers\Admin\ProductController@images')->name('admin.product.images');
  
  
      Route::get('/product/settings', 'App\Http\Controllers\Admin\ProductController@settings')->name('admin.product.settings');
      Route::post('/product/settings', 'App\Http\Controllers\Admin\ProductController@updateSettings')->name('admin.product.settings');
  
  
      // Admin Coupon Routes
      Route::get('/coupon', 'App\Http\Controllers\Admin\CouponController@index')->name('admin.coupon.index');
      Route::post('/coupon/store', 'App\Http\Controllers\Admin\CouponController@store')->name('admin.coupon.store');
      Route::get('/coupon/{id}/edit', 'App\Http\Controllers\Admin\CouponController@edit')->name('admin.coupon.edit');
      Route::post('/coupon/update', 'App\Http\Controllers\Admin\CouponController@update')->name('admin.coupon.update');
      Route::post('/coupon/delete', 'App\Http\Controllers\Admin\CouponController@delete')->name('admin.coupon.delete');
      // Admin Coupon Routes End
  
  
      // Product Order
      Route::get('/product/all/orders', 'App\Http\Controllers\Admin\ProductOrderController@all')->name('admin.all.product.orders');
      Route::get('/product/pending/orders', 'App\Http\Controllers\Admin\ProductOrderController@pending')->name('admin.pending.product.orders');
      Route::get('/product/processing/orders', 'App\Http\Controllers\Admin\ProductOrderController@processing')->name('admin.processing.product.orders');
      Route::get('/product/completed/orders', 'App\Http\Controllers\Admin\ProductOrderController@completed')->name('admin.completed.product.orders');
      Route::get('/product/rejected/orders', 'App\Http\Controllers\Admin\ProductOrderController@rejected')->name('admin.rejected.product.orders');
      Route::post('/product/orders/status', 'App\Http\Controllers\Admin\ProductOrderController@status')->name('admin.product.orders.status');
      Route::get('/product/orders/detais/{id}', 'App\Http\Controllers\Admin\ProductOrderController@details')->name('admin.product.details');
      Route::post('/product/order/delete', 'App\Http\Controllers\Admin\ProductOrderController@orderDelete')->name('admin.product.order.delete');
      Route::post('/product/order/bulk-delete', 'App\Http\Controllers\Admin\ProductOrderController@bulkOrderDelete')->name('admin.product.order.bulk.delete');
      Route::get('/product/orders/report', 'App\Http\Controllers\Admin\ProductOrderController@report')->name('admin.orders.report');
      Route::get('/product/export/report', 'App\Http\Controllers\Admin\ProductOrderController@exportReport')->name('admin.orders.export');
      Route::post('/orders/status', 'App\Http\Controllers\Admin\PackageController@status')->name('admin.orders.status');
      Route::post('/orders/mail', 'App\Http\Controllers\Admin\PackageController@mail')->name('admin.orders.mail');
      // Product Order end
    });
});

// User Routes
Route::group(['prefix' => 'user', 'middleware' => ['auth', 'userstatus']], function () {
  // Summernote image upload
  Route::post('/summernote/upload', 'User\SummernoteController@upload')->name('user.summernote.upload');

  Route::get('/dashboard', 'User\UserController@index')->name('user-dashboard');
  Route::get('/reset', 'User\UserController@resetform')->name('user-reset');
  Route::post('/reset', 'User\UserController@reset')->name('user-reset-submit');
  Route::get('/profile', 'User\UserController@profile')->name('user-profile');
  Route::post('/profile', 'User\UserController@profileupdate')->name('user-profile-update');
  Route::get('/shipping/details', 'User\UserController@shippingdetails')->name('shpping-details');
  Route::post('/shipping/details/update', 'User\UserController@shippingupdate')->name('user-shipping-update');
  Route::get('/logout', 'User\LoginController@logout')->name('user-logout');
  Route::get('/billing/details', 'User\UserController@billingdetails')->name('billing-details');
  Route::post('/billing/details/update', 'User\UserController@billingupdate')->name('billing-update');
  Route::get('/orders', 'User\OrderController@index')->name('user-orders');
  Route::get('/order/{id}', 'User\OrderController@orderdetails')->name('user-orders-details');
  Route::get('/events', 'User\EventController@index')->name('user-events');
  Route::get('/event/{id}', 'User\EventController@eventdetails')->name('user-event-details');
  Route::post('/zip-file/upload', 'User\TicketController@zip_upload')->name('zip.upload');
});


/*=======================================================
******************** Frontend Routes **********************
=======================================================*/

Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index')->name('frontend.index');
Route::get('/about', 'App\Http\Controllers\Frontend\FrontendController@about')->name('frontend.about');
Route::get('/contact', 'App\Http\Controllers\Frontend\FrontendController@contact')->name('frontend.contact');
Route::get('/products', 'App\Http\Controllers\Frontend\ProductController@product')->name('frontend.product');
Route::get('/search', 'App\Http\Controllers\Frontend\FrontendController@search')->name('frontend.search');
Route::get('/privacy-policy', 'App\Http\Controllers\Frontend\FrontendController@ppolicy')->name('frontend.ppolicy');
Route::get('/return-policy', 'App\Http\Controllers\Frontend\FrontendController@rpolicy')->name('frontend.rpolicy');

// Product
Route::get('/cart', 'App\Http\Controllers\Frontend\ProductController@cart')->name('frontend.cart');
Route::get('/add-to-cart/{id}', 'App\Http\Controllers\Frontend\ProductController@addToCart')->name('add.cart');
Route::post('/cart/update', 'App\Http\Controllers\Frontend\ProductController@updatecart')->name('cart.update');
Route::get('/cart/item/remove/{id}', 'App\Http\Controllers\Frontend\ProductController@cartitemremove')->name('cart.item.remove');
Route::get('/checkout', 'App\Http\Controllers\Frontend\ProductController@checkout')->name('frontend.checkout');
Route::get('/checkout/{slug}', 'App\Http\Controllers\Frontend\ProductController@Productcheckout')->name('frontend.product.checkout');
Route::post('/coupon', 'App\Http\Controllers\Frontend\ProductController@coupon')->name('frontend.coupon');


// User Login and Register routes
Route::group([], function () {
  Route::get('/login', 'User\LoginController@login')->name('user.login.submit');

  Route::get('/register', 'User\RegisterController@registerPage')->name('user-register');
  Route::post('/register/submit', 'User\RegisterController@register')->name('user-register-submit');
  Route::get('/register/verify/{token}', 'User\RegisterController@token')->name('user-register-token');
  Route::get('/forgot', 'User\ForgotController@showforgotform')->name('user-forgot');
  Route::post('/forgot', 'User\ForgotController@forgot')->name('user-forgot-submit');
});

Route::group([], function () {
  Route::get('/login', 'App\Http\Controllers\User\LoginController@showLoginForm')->name('user.login');
  Route::post('/login', 'App\Http\Controllers\User\LoginController@login')->name('user.login.submit');
  Route::get('/register', 'App\Http\Controllers\User\RegisterController@registerPage')->name('user-register');
  Route::post('/register/submit', 'App\Http\Controllers\User\RegisterController@register')->name('user-register-submit');
  Route::get('/register/verify/{token}', 'App\Http\Controllers\User\RegisterController@token')->name('user-register-token');
  Route::get('/forgot', 'App\Http\Controllers\User\ForgotController@showforgotform')->name('user-forgot');
  Route::post('/forgot', 'App\Http\Controllers\User\ForgotController@forgot')->name('user-forgot-submit');
});



if (!app()->runningInConsole()) {

    // Dynamic Routes

    Route::group([], function () {

      $wdPermalinks = Permalink::where('details', 1)->get();
      foreach ($wdPermalinks as $pl) {
        $type = $pl->type;
        $permalink = $pl->permalink;
  
        if ($type == 'product_details') {
          Route::get("$permalink/{slug}", 'App\Http\Controllers\Frontend\ProductController@productDetails')->name('frontend.product.details');
        }
      }
    });

  Route::group([], function () {

    $wdPermalinks = Permalink::where('details', 0)->get();
    foreach ($wdPermalinks as $pl) {
      $type = $pl->type;
      $permalink = $pl->permalink;


      if ($type == 'products') {
        $action = 'App\Http\Controllers\Frontend\ProductController@product';
        $routeName = 'frontend.product';
      } elseif ($type == 'cart') {
        $action = 'App\Http\Controllers\Frontend\ProductController@cart';
        $routeName = 'frontend.cart';
      } elseif ($type == 'product_checkout') {
        $action = 'App\Http\Controllers\Frontend\ProductController@checkout';
        $routeName = 'frontend.checkout';
      } elseif ($type == 'blogs') {
        $action = 'App\Http\Controllers\Frontend\FrontendController@blogs';
        $routeName = 'frontend.blogs';
      } elseif ($type == 'login') {
        $action = 'User\LoginController@showLoginForm';
        $routeName = 'user.login';
      } elseif ($type == 'register') {
        $action = 'User\RegisterController@registerPage';
        $routeName = 'user-register';
      } elseif ($type == 'forget_password') {
        $action = 'User\ForgotController@showforgotform';
        $routeName = 'user-forgot';
      } elseif ($type == 'admin_login') {
        $action = 'App\Http\Controllers\Admin\LoginController@login';
        $routeName = 'admin.login';
        Route::get("$permalink", "$action")->name("$routeName")->middleware('guest:admin');
        continue;
      }

      Route::get("$permalink", "$action")->name("$routeName");
    }
  });
}
