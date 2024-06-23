<?php

use Illuminate\Support\Facades\Route;
use App\Models\Permalink;

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
    Route::get('/file-manager', 'Admin\SummernoteController@fileManager')->name('admin.file-manager');

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

if (!app()->runningInConsole()) {
    Route::group([], function () {
  
        $wdPermalinks = Permalink::where('details', 0)->get();
        foreach ($wdPermalinks as $pl) {
          $type = $pl->type;
          $permalink = $pl->permalink;
      
      
          if ($type == 'products') {
            $action = 'Front\ProductController@product';
            $routeName = 'front.product';
          } elseif ($type == 'cart') {
            $action = 'Front\ProductController@cart';
            $routeName = 'front.cart';
          } elseif ($type == 'product_checkout') {
            $action = 'Front\ProductController@checkout';
            $routeName = 'front.checkout';
          } elseif ($type == 'blogs') {
            $action = 'Front\FrontendController@blogs';
            $routeName = 'front.blogs';
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