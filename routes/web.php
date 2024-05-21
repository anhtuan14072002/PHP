<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/products', [HomeController::class, "index"]);
Route::get('/products/create', [HomeController::class, "create"]);
Route::post('/products', [HomeController::class, "store"]);
Route::get('/products/{product}/edit', [HomeController::class, "edit"]);
Route::put('/products/{product}', [HomeController::class, "update"]);

