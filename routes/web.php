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

  Route::group(['middleware' => 'checkpermission:Dashboard'], function () {
    // Admin Dashboard Routes
    Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@dashboard')->name('admin.dashboard');
  });

    // Admin Profile Routes
    Route::get('/changePassword', 'Admin\ProfileController@changePass')->name('admin.changePass');
    Route::post('/profile/updatePassword', 'Admin\ProfileController@updatePassword')->name('admin.updatePassword');
    Route::get('/profile/edit', 'Admin\ProfileController@editProfile')->name('admin.editProfile');
    Route::post('/propic/update', 'Admin\ProfileController@updatePropic')->name('admin.propic.update');
    Route::post('/profile/update', 'Admin\ProfileController@updateProfile')->name('admin.updateProfile');
    
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