<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

// Route::get('/admin-login', function (){
//     return view('admin-login');
// });

Route::get('/admin', [AdminController::class, 'index'])->name('login');
Route::post('/admin/login', [AdminController::class, 'adminAuthentication'])->name('admin.login');
Route::get('/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');
Route::get('/admin/authors', [AuthorController::class, 'index'])->name('admin.authors')->middleware('auth');
Route::post('/admin/add-authors', [AuthorController::class, 'create'])->name('add.author')->middleware('auth');
Route::put('/admin/update-authors/{id}', [AuthorController::class, 'update'])->name('update.author')->middleware('auth');