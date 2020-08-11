<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
});
Route::get('/insert',function (){
   DB::insert('insert into diemdi(name,name_id)value (?,?)',['Hà Nội','HAN']);
   DB::insert('insert into diemdi(name,name_id)value (?,?)',['Hải Phòng','HPH']);
   DB::insert('insert into diemdi(name,name_id)value (?,?)',['Đà Nẵng','DAD']);
   return 'done';
});