<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhachSanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuanTriTinController;
use App\Http\Controllers\OrdersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', [KhachSanController::class, 'index']);
Route::get('/product', [KhachSanController::class, 'product']);

Route::get('/addcart/{id}', [OrdersController::class, 'addcart']);
Route::get('/cart', [OrdersController::class, 'cart'])->name('cart');

Route::get('/remove-from-cart/{id}',[OrdersController::class,'removeFromCart'])->name('cart.remove');

Route::post('/cart/update', [OrdersController::class,'updateCart'])->name('cart.update');
Route::post('/calculate-shipping', [OrdersController::class, 'calculateShipping'])->name('calculate.shipping');


Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/allsp', [AdminController::class, 'allsp'])->name('admin.allsp');
    Route::get('/restore', [AdminController::class, 'restore'])->name('admin.restore');
    Route::get('/restore_us', [AdminController::class, 'restore_us'])->name('admin.restore_us');

    Route::post('/thaydoitrangthai', [AdminController::class, 'thayDoiTrangThai']);
    Route::get('/allorder', [AdminController::class, 'donhang'])->name('admin.allorder');
    Route::get('/orderItem/{id_dh}', [AdminController::class, 'orderItem'])->name('admin.orderItem');

    Route::get('/xoa/{id}',[AdminController::class,'xoa'] );
    Route::get('/editss/{id}', [AdminController::class, 'editss']);
    Route::post('/editss/{id}', [AdminController::class, 'updateSanPham']);
    Route::get('/products/create', [AdminController::class, 'create'])->name('admin.addsp');
    Route::post('/products', [AdminController::class, 'store'])->name('admin.products.store');

    Route::get('/allus', [AdminController::class, 'allus'])->name('admin.allus');
    Route::get('/editus/{id}', [AdminController::class, 'editus']);
    Route::post('/editus/{id}', [AdminController::class, 'updateus']);

    Route::get('/phanquyen/{id}', [AdminController::class, 'editpq']);
    Route::post('/phanquyen/{id}', [AdminController::class, 'updatepq']);



    Route::get('/addus',[AdminController::class,'addus'] );
    Route::post('/addus',[AdminController::class,'addus_'] );

});





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/quantri', [QuanTriTinController::class, 'index'])->middleware('auth', 'Quantri');
require __DIR__ . '/auth.php';
