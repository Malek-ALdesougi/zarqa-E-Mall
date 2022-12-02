<?php

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\storesController;

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

// langing page route 
Route::get('/index', [storesController::class, 'index']);

Route::get('/about', function () {
    return view('/about');
});

Route::get('/contact', function () {
    return view('/contact');
});

// MAIN ROUTES FOR LOGIN AND REGISTER

//route to show the register page
Route::get('/register', function () {
    return view('register');
});
Route::post('/register-user', [UserController::class, 'store']);
Route::post('/register-owner', [UserController::class, 'ownerRegister']);

//route to show the login page
Route::get('/login', function () {
    return view('login');
});
Route::get('/login-user', [UserController::class, 'login']);

// Logout route
Route::get('/logout', [UserController::class, 'logout']);


// owner page routes--------------------------
Route::get('/owner', function () {
    $stoeId = Auth::user()->stores->id;
    $StoreProducts = Product::all()->where('store_id', $stoeId);
    return view('/owner', ['store' => Auth::user()->stores, 'owner' => Auth::user(), 'products' => $StoreProducts]);
});
Route::post('/add-product', [ProductController::class, 'store']);
Route::delete('delete/{id}', [ProductController::class, 'destroy']);
// end owner page routes----------------------

Route::get('/store', function () {
    return view('/store');
});

Route::get('profile', function () {
    return view('profile');
});


Route::get('checkout', function () {
    return view('checkout');
});


// Route::get('register', function () {
//     return view('register');
// });



//--------------///////////////////////// DASHBOARD //////////////////////------------//
Route::get('index-dashboard', function () {
    return view('admin.index-dashboard');
});

Route::get('users', function () {
    return view('admin.users');
});

Route::get('stores', function () {
    return view('admin.stores');
});

Route::get("pendings", function () {
    return view('admin.pendings');
});
