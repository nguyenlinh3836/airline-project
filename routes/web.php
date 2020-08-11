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
    return view('home');
});
Route::get('trangthai','HomeController@trangthai');
Route::get('Uudai2','HomeController@uudai2');
Route::get('Gioithieu','HomeController@gioithieu');
Route::get('Uudai','HomeController@uudai');
Route::get('thongtin','HomeController@thongtin');
Route::get('ve','HomeController@ve');
Route::get('Muave','HomeController@muave');
Route::get('chuyenbay','HomeController@chuyenbay');

