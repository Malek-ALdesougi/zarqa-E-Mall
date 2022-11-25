<?php

use App\Http\Controllers\UserController;
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

// Basic routes 
Route::get('/index', function () {
    return view('/index');
});

Route::get('/about', function () {
    return view('/about');
});

Route::get('/contact', function () {
    return view('/contact');
});

// MAIN ROUTES FOR LOGIN AND REGISTER
Route::get('/register', function() {
    return view('register');
});

Route::post('/register-user', [UserController::class, 'store']);
Route::post('/register-owner', [UserController::class, 'ownerRegister']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', [UserController::class, 'logout']);









Route::get('/store', function () {
    return view('/store');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('/owner', function () {
    return view('owner');
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
