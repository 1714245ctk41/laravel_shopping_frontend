<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/category/{slug}/{categoryId}', [CategoryController::class, 'index'])->name('category.product');

//show product for user add to cart
route::get('/products', [ProductController::class, 'index']);

//add to cart
route::get('products/add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('addToCart');

//show cart
route::get('/products/show-cart', [ProductController::class, 'showCart'])->name('showCart');
//update cart
route::get('/products/update-cart', [ProductController::class, 'updateCart'])->name('updateCart');
//Delete cart
route::get('/products/delete-cart', [ProductController::class, 'deleteCart'])->name('deleteCart');