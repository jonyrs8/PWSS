<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::resource('/admin/category','App\Http\Controllers\CategoryController');
Route::resource('/admin/product','App\Http\Controllers\ProductController');
Route::resource('/admin/brand','App\Http\Controllers\BrandController');
Route::resource('/admin/color','App\Http\Controllers\ColorController');
Route::resource('/admin/size','App\Http\Controllers\SizeController');
Route::resource('/admin/unit','App\Http\Controllers\UnitController');