<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PublishersController;
use App\Models\BookCategories;
use App\Models\Categories;
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
Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/book/{id}', [BookController::class, 'book_details'])->name('book_detail');


Route::get('/contact', [BookController::class, 'index2'])->name('contact');

Route::get('/publishers/{id}', [PublishersController::class, 'index'])->name('publishers');
Route::get('/show/{id}',[PublishersController::class, 'book_details'])->name('book_detail');

Route::get('/category/{id}',[CategoriesController::class, 'index'])->name('get_book');