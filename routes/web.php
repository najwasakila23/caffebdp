<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartOrderController;

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

Route::get('/menu', function () {
    return view('order.menu');
});

Route::get('/keranjang', function () {
    return view('order.keranjang');
});

Route::get('/orders', [CartOrderController::class, 'index']);
Route::get('cart', [CartOrderController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id_product}', [CartOrderController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [CartOrderController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [CartOrderController::class, 'remove'])->name('remove_from_cart');
Route::post('/checkout',[CartOrderController::class,'checkout'])->name('checkout');