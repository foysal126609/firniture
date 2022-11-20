<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;

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


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::post('/new-category', [CategoryController::class, 'saveCategory'])->name('new-category');
Route::get('/status/{id}', [CategoryController::class, 'status'])->name('status');
Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('update-category');
Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add-product');
Route::post('/new-product', [ProductController::class, 'saveProduct'])->name('new-product');


Route::get('/sub-category', [SubCategoryController::class, 'index'])->name('sub-category');
Route::post('/new-sub-category', [SubCategoryController::class, 'saveSubCategory'])->name('new-sub-category');

Route::get('/brand', [BrandController::class, 'index'])->name('brand');
Route::post('/new-brand', [BrandController::class, 'saveBrand'])->name('new-brand');
Route::get('/brand-status/{id}', [BrandController::class, 'status'])->name('brand-status');
