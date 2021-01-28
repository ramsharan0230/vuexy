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
    return view('pages.users.login2');
});
Route::get('register1', 'PagesController@registerOne')->name('register1');
Route::get('register2', 'PagesController@registerTwo')->name('register2');
Route::get('login1', 'PagesController@loginCenter')->name('login1');
Route::get('login2', 'PagesController@login')->name('login2');
Route::get('account-setting', 'PagesController@accountSetting')->name('account-setting');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('users/list', 'PagesController@users')->name('users');
Route::get('invoice/list', 'PagesController@invoice')->name('invoices');
Route::get('posts', 'PagesController@index')->name('posts');
Route::get('forget-password1', 'PagesController@forgetPassword1')->name('forget-password1');
Route::get('forget-password2', 'PagesController@forgetPassword2')->name('forget-password2');
Route::get('user-profile', 'PagesController@userProfile')->name('user-profile');
Route::get('user-edit', 'PagesController@userEdit')->name('user-edit');
Route::get('password-reset1', 'PagesController@passwordReset1')->name('password-reset1');
Route::get('password-reset2', 'PagesController@passwordReset2')->name('password-reset2');

Route::get('invoice-add', 'PagesController@invoiceAdd')->name('invoice-add');
Route::get('invoice-preview', 'PagesController@invoicePreview')->name('invoice-preview');
Route::get('invoice-edit', 'PagesController@invoiceEdit')->name('invoice-edit');

