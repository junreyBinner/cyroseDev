<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminOrderController;


/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


/*
|--------------------------------------------------------------------------
| USER ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    // USER DASHBOARD
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');


    // CART
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');


    // ORDERS
    Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('/my-orders', [OrderController::class, 'myOrders'])->name('orders.my');


    // PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {

        // ADMIN DASHBOARD
        Route::get('/dashboard', [AdminController::class, 'dashboard'])
            ->name('admin.dashboard');

        // PRODUCT MANAGEMENT
        Route::get('/products', [AdminProductController::class, 'index'])
            ->name('admin.products');

        Route::get('/products/create', [AdminProductController::class, 'create'])
            ->name('admin.products.create');

        Route::post('/products/store', [AdminProductController::class, 'store'])
            ->name('admin.products.store');

        // ORDERS
        Route::get('/orders', [AdminOrderController::class, 'index'])
            ->name('admin.orders');
    });


require __DIR__ . '/auth.php';
