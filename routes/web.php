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

Route::get('login', 'Admin\AdminLoginController@login')->name('admin.login');

Route::post('checklogin', 'Admin\AdminLoginController@checkLogin')->name('admin.checklogin');

Route::group(['middleware' => 'admin'], function () {

Route::get('dashboard', 'Admin\DashboardController@dashboardView')->name('admin.dashboard');

Route::get('changeusername','Admin\AdminLoginController@changeUserNameView')->name('admin.changeusernameview');

Route::post('updateusername/{admin_id}','Admin\AdminLoginController@updateUserName')->name('admin.updateusername');

Route::get('changepassword', 'Admin\AdminLoginController@changePasswordView')->name('admin.changepasswordview');

Route::post('updatepassword/{admin_id}','Admin\AdminLoginController@updatePassword')->name('admin.updatepassword');


Route::get('country/index', 'Admin\CountryController@index')->name('admin.countryindex');

Route::get('country/add', 'Admin\CountryController@create')->name('admin.createcountry');

Route::post('country/store','Admin\CountryController@store')->name('admin.storecountry');

Route::get('country/edit/{country_id}', 'Admin\CountryController@edit')->name('admin.editcountry');

Route::post('country/update/{country_id}', 'Admin\CountryController@update')->name('admin.updatecountry');

Route::get('country/delete/{country_id}', 'Admin\CountryController@destroy')->name('admin.deletecountry');

Route::get('logout', 'Admin\AdminLoginController@logout')->name('admin.logout');

Route::get('transaction/index', function () {
    return view('transaction/index');
});

Route::get('user/index', function () {
    return view('user/index');
});

});

Route::get('test','Admin\AdminLoginController@test');

