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
    return view('pages.dashboard');
});
Route::get('register1', 'PagesController@registerOne')->name('register1');
Route::get('register2', 'PagesController@registerTwo')->name('register2');
Route::get('login1', 'PagesController@loginCenter')->name('login1');
Route::get('login2', 'PagesController@login')->name('login2');
Route::get('account-setting', 'PagesController@accountSetting')->name('account-setting');
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('users/list', 'PagesController@users')->name('users');
Route::get('invoice/list', 'PagesController@invoice')->name('invoice');
