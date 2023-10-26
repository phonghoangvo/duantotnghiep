<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\TinController;

Route::get('/',[TinController::class, 'index']);
Route::get('/sanpham',[TinController::class, 'sanpham']);
Route::get('/list',[ProductController::class,'list']);
Route::get('/add',[ProductController::class,'add']);
Route::post('/save',[ProductController::class,'save']);
Route::get('/edit/{id}',[ProductController::class,'edit']);
Route::post('/update',[ProductController::class,'update']);
Route::get('/del/{id}',[ProductController::class,'del']);
