<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
Route::get('/food-beverage', [ProductController::class, 'foodAndBeverage']);
Route::get('/beauty-health', [ProductController::class, 'beautyAndHealth']);
Route::get('/home-care', [ProductController::class, 'homeCare']);
Route::get('/baby-kid', [ProductController::class, 'babyAndKid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile']);

Route::get('/sales', [SalesController::class, 'showSalesPage']);
