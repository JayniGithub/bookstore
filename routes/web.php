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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (){
    return view('index');
});

Route::get('/register', function (){
    return view('register');
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/shop', function (){
    return view('shop');
});

Route::get('/cart', function (){
    return view('cart');
});

Route::get('/details', function (){
    return view('details');
});

Route::get('/checkout', function (){
    return view('checkout');
});

Route::get('/admin-login', function (){
    return view('admin-login');
});