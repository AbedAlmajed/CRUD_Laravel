<?php

use App\Http\Controllers\PostController;
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
})->name('Home');

Route::get('/posts',[PostController::class,'posts'])->name('post.posts');//to show all post from database
Route::get('/post/create',[PostController::class,'create'])->name('post.create');//to create post using from
Route::post('/post/create',[PostController::class,'insert'])->name('post.insert');//insert data into database
Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::put('/post/update/{id}',[PostController::class,'update'])->name('post.update');
Route::get('/post/delete/{id}',[PostController::class,'delete'])->name('post.delete');
Route::get('/post/deleteAll',[PostController::class,'deleteAll'])->name('post.deleteAll');
Route::get('/post/deleteAllTruncate',[PostController::class,'deleteAllTruncate'])->name('post.deleteAllTruncate');