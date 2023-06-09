<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;



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
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [BlogController::class, 'welcome'])->name('welcome');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('show');
Route::post('/blog/{slug}', [BlogController::class, 'detail'])->name('show.detail');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('dashboard')->group(function() {
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/category', [CategoryController::class,'index']);
    Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class,'store'])->name('category.create.store');
    Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::patch('/category/update/{id}', [CategoryController::class,'update'])->name('category.edit.update');
    Route::get('/category/delete/{id}', [CategoryController::class,'destroy'])->name('category.delete');

    Route::get('/posts', [PostController::class,'index']);
    Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
    Route::post('/posts/store', [PostController::class,'store'])->name('posts.create.store');
    Route::get('/posts/edit/{id}', [PostController::class,'edit'])->name('posts.edit');
    Route::patch('/posts/update/{id}', [PostController::class,'update'])->name('posts.edit.update');
    Route::get('/posts/delete/{id}', [PostController::class,'destroy'])->name('posts.index.destroy');
});
