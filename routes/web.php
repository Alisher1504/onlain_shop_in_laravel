<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'is_admin']], function() {
    Route::get('/dashboard', [FrontendController::class, 'index']);

    Route::get('/category', [CategoryController::class, 'index']);

    Route::get('/add', [CategoryController::class, 'add']);
    Route::post('/add-category', [CategoryController::class, 'store']);

    Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('update/{id}', [CategoryController::class, 'update']);

    Route::get('destroy/{id}', [CategoryController::class, 'destroy']);


    Route::get('/product', [ProductController::class, 'index']);

    Route::get('/add_product', [ProductController::class, 'add_product']);
    Route::post('/addproduct', [ProductController::class, 'addproduct'])->name('addproduct');

    Route::get('editproduct/{id}', [ProductController::class, 'edit_product']);

    Route::get('destroy-product/{id}', [ProductController::class, 'destroy_product']);
    Route::put('update-product/{id}', [ProductController::class, 'update_product']);

});
