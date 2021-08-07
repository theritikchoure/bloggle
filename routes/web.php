<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/blog/{permalink}', [HomeController::class, 'detail'])->name('blog_detail');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

Route::get('/category/{slug}', [HomeController::class, 'category'])->name('category');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'save_message'])->name('save_message');

Route::post('/save-comment/{id}', [HomeController::class, 'save_comment'])->name('save_comment');


Route::middleware(['adminauth'])->group(function () {

    Route::get('/admin/login', [AdminController::class, 'index']);
    Route::post('/admin/login', [AdminController::class, 'login_check']);

    Route::get('/admin/logout', [AdminController::class, 'logout']);

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

    Route::get('/admin/category', [CategoryController::class, 'index']);
    Route::get('/admin/category/add', [CategoryController::class, 'add']);
    Route::post('/admin/category/add', [CategoryController::class, 'save']);
    Route::get('admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('admin/category/edit/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('admin/category/status/{id}/{status}', [CategoryController::class, 'status'])->name('admin.category.status');
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

    Route::get('/admin/post', [PostController::class, 'index']);
    Route::get('/admin/post/add', [PostController::class, 'add']);
    Route::post('/admin/post/add', [PostController::class, 'save']);
    Route::get('admin/post/edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::put('admin/post/edit/{id}', [PostController::class, 'update'])->name('admin.post.update');
    Route::get('admin/post/status/{id}/{status}', [PostController::class, 'status'])->name('admin.post.status');
    Route::get('admin/post/delete/{id}', [PostController::class, 'delete'])->name('admin.post.delete');

    Route::get('/admin/settings', [SettingController::class, 'index']);
    Route::post('/admin/settings', [SettingController::class, 'save']);

    Route::get('/admin/pages/about-us', [AboutusController::class, 'index']);
    Route::post('/admin/pages/about-us', [AboutusController::class, 'save']);

    Route::get('/admin/pages/contact-us', [ContactusController::class, 'index']);
    Route::post('/admin/pages/contact-us', [ContactusController::class, 'save']);

    Route::get('/admin/messages', [MessageController::class, 'index']);
    Route::get('/admin/messages/delete/{id}', [MessageController::class, 'delete']);

    Route::get('/admin/comments', [CommentController::class, 'index']);
    Route::get('admin/comments/status/{id}/{status}', [CommentController::class, 'status'])->name('admin.comment.status');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
