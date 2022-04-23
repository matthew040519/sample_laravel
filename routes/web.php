<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/mainpage', [SampleController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/', [LoginController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'showAddProduct']);
Route::get('/product/id/{id}', [ProductController::class, 'showProduct']);
Route::post('/product/create', [ProductController::class, 'AddProduct'])->name('AddProduct');
