<?php

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
Route::get('trangchu','pagescontroller@gettrangchu');
Route::get('loaisanpham/{id}','pagescontroller@getloaisp');
Route::get('chitiet/{id}','pagescontroller@getdetail');
Route::get('lienhe','pagescontroller@getlienhe');
Route::get('gioithieu','pagescontroller@getgioithieu');
Route::get('dathang/{id}','pagescontroller@getdathang');
Route::post('xulydathang/{id}','pagescontroller@getxuly');
Route::get('dangnhap','pagescontroller@getdangnhap');
Route::post('dangnhap','pagescontroller@postdangnhap');
Route::get('dangki','pagescontroller@getdangki');
Route::post('dangki','pagescontroller@postdangki');
Route::get('dangxuat','pagescontroller@getdangxuat');
Route::post('timkiem','pagescontroller@gettimkiem');