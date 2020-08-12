<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', 'Admin\DashboardController@dashboardView')->name('admin.dashboard');

Route::get('login', 'Admin\AdminLoginController@login')->name('admin.login');

Route::get('changeusername','Admin\AdminLoginController@changeUserNameView')->name('admin.changeusernameview');

Route::post('updateusername/{admin_id}','Admin\AdminLoginController@updateUserName')->name('admin.updateusername');

Route::get('changepassword', 'Admin\AdminLoginController@changePasswordView')->name('admin.changepasswordview');

Route::post('updatepassword/{admin_id}','Admin\AdminLoginController@updatePassword')->name('admin.updatepassword');

Route::post('checklogin', 'Admin\AdminLoginController@checkLogin')->name('admin.checklogin');

Route::get('test','Admin\AdminLoginController@test');

Route::get('transaction/index', function () {
    return view('transaction/index');
});

Route::get('user/index', function () {
    return view('user/index');
});