<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
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

Route::get('/', [PagesController::class,'index'])->name('home');
Route::get('/fxmoneyrobot', [PagesController::class,'fxmoneyrobot']);
Route::get('/algotrading', [PagesController::class,'algotrading']);
Route::get('/brokerpartners', [PagesController::class,'brokerpartners']);
Route::get('/passiveincome', [PagesController::class,'passiveincome']);
Route::get('/about', [PagesController::class,'about']);
Route::get('/cart', [PagesController::class,'cart'])->name('cart');
Route::get('/checkout', [PagesController::class,'checkout'])->name('checkout');
Route::get('/cart/add/{price}/{desc}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/remove/{index}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('payout', [PaymentController::class, 'payout'])->name('payout');
Route::get('/payment/success/{id}', [PaymentController::class, 'paymnentSuccessful'])->name('payment.success');
Route::get('/payment/failed/{id}', [PaymentController::class, 'paymnentFailed'])->name('payment.failed');