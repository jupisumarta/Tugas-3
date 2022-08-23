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


Route::get('template', function() {
    return view("template.base");
});

Route::get('beranda', function() {
    return view('beranda');
});

Route::get('produk', function() {
    return view('produk');
});

Route::get('kategori', function() {
    return view('kategori');
});

Route::get('login', function() {
    return view('login');
});

Route::get('kategori', function() {
    return view('kategori');
});

Route::get('pelanggan', function() {
    return view('pelanggan');
});

Route::get('supplier', function() {
    return view('supplier');
});

Route::get('shop-single-produk', function() {
    return view('shop-single-produk');
});

Route::get('shop', function() {
    return view('shop');
});

Route::get('promo', function() {
    return view('promo');
});

Route::get('shop-produk', function() {
    return view('shop-produk');
});