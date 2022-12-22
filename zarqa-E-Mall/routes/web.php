<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OrderController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\storesController;
use App\Models\Cart;
use App\Models\Store;
use RealRashid\SweetAlert\Facades\Alert;


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

// landing page route --------------------------

Route::get('/index', [storesController::class, 'index'])->name('index');

Route::get('/about', function () {
    Alert::success('Success Title', 'Success Message');
    return view('/about');
});

Route::get('/contact', function () {
    return view('/contact');
});





// <<<<<<<<<<<<<<<<<<<-------MAIN ROUTES FOR LOGIN AND REGISTER-------->>>>>>>>>>>>>>>>>>>>>>>>>>

//route to show the register page
Route::get('/register', function () {
    return view('register');
});
Route::post('/register-user', [UserController::class, 'store']);
Route::post('/register-owner', [UserController::class, 'ownerRegister']);

//route to show the login page
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/login-user', [UserController::class, 'login']);

// Logout route
Route::get('/logout', [UserController::class, 'logout']);

// <<<<<<<<<<<<<<<<<<<------- END MAIN ROUTES FOR LOGIN AND REGISTER-------->>>>>>>>>>>>>>>>>>>>>>>






// <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<---------owner page routes---------->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// i have did this in the controllor because i just can... also this route need to access it from differnt pages 
Route::get('/owner', function () {
    $stoeId = Auth::user()->stores->id;
    $StoreProducts = Product::all()->where('store_id', $stoeId);
    return view('/owner', ['store' => Auth::user()->stores, 'owner' => Auth::user(), 'products' => $StoreProducts]);
})->middleware('can:isOwner');
Route::post('/add-product', [ProductController::class, 'store'])->middleware('can:isOwner');
Route::delete('delete/{id}', [ProductController::class, 'destroy'])->middleware('can:isOwner');

// <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<---------owner page routes---------->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



//route handel show specific store
Route::get('/store/{id}', [storesController::class, 'show']);

//add to cart route
Route::post('/add-cart/{id}', [CartController::class, 'store']);

//delete cart items route
Route::get('/delete-cart-item/{id}', [CartController::class, 'destroy']);

//delete checkout item route
Route::get('/delete-checkout-item/{id}', [CartController::class, 'deleteItem']);


// checkout route and send the total price with it its much easier !!
Route::get('/checkout', function () {

    if(!auth()->user()){
        Alert::error('اللإنتقال للدفع يتطلب تسجيل الدخول ');
        return redirect('/login');
    }

    $totalPrice = 0;
    $allProducts = Cart::where('user_id',auth()->user()->id)->get();
    foreach ($allProducts as $product) {
        // dd($product->quantity);
        $original = Product::find($product->product_id);
        $totalPrice = $totalPrice + ($original->price * $product->quantity);
    }
    return view('checkout', ['totalPrice' => $totalPrice]);
});

//place order route
Route::get('/place-order' , [OrderController::class, 'store']);
Route::get('/delete-order/{id}', [OrderController::class, 'deleteOrder']);


Route::get('/profile', [Controller::class, 'main'])->middleware('can:isUser');

Route::post('/edit-user-profile/{id}', [Controller::class, 'editProfile']);


//<<<<<<<<<<<<<<<<<<<<<<----------- DASHBOARD ------------>>>>>>>>>>>>>>>>>>>>>>>>>
Route::middleware('can:isAdmin')->group(function () {

    Route::get('/index-dashboard', function () {
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
});
//<<<<<<<<<<<<<<<<<<<<<<----------- END DASHBOARD ------------>>>>>>>>>>>>>>>>>>>>>>>>>




