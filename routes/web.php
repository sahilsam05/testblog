<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Route::post('/blog/{id}/comment', [PostsController::class, 'storeComment'])->name('blog.comment.store');

Route::post('/comments/{post}', [CommentController::class, 'store'])->name('comments.store');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/blog/{id}', [PostsController::class, 'show'])->name('blog.show');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/upcoming-drops', function () {
    return view('upcoming-drops');
});

