<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumCategoryController;
use App\Http\Controllers\ForumTopicsController;
use App\Http\Controllers\ForumPostsController;
use App\Http\Controllers\AboutPageController;

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
//Categories
Route::get('/', [ForumCategoryController::class, 'index'])->name('index');
Route::get('/create/', [ForumCategoryController::class, 'category_create'])->name('category-create');
Route::post('/custom-create/', [ForumCategoryController::class, 'category_create_custom'])->name('category-create-custom');
Route::get('/edit/{id}/', [ForumCategoryController::class, 'category_edit'])->name('category-edit');
Route::post('/custom-edit/{id}/', [ForumCategoryController::class, 'category_edit_custom'])->name('category-edit-custom');
Route::get('/delete/{id}/', [ForumCategoryController::class, 'category_delete'])->name('category-delete');
Route::post('/custom-delete/{id}/', [ForumCategoryController::class, 'category_delete_custom'])->name('category-delete-custom');

//Topics
Route::get('/topics/{id}/', [ForumTopicsController::class, 'forum_topics'])->name('topics');
Route::get('/topics/create/', [ForumTopicsController::class, 'forum_topics_create'])->name('topic-create');
Route::get('/topics/edit/', [ForumTopicsController::class, 'forum_topics_edit'])->name('topic-edit');
Route::get('/topics/delete/', [ForumTopicsController::class, 'forum_topics_delete'])->name('topic-delete');

//Posts
Route::get('/posts/', [ForumPostsController::class, 'forum_posts'])->name('posts');
Route::get('/posts/create/', [ForumPostsController::class, 'forum_posts_create'])->name('post-create');
Route::get('/posts/edit/', [ForumPostsController::class, 'forum_posts_edit'])->name('post-edit');
Route::get('/posts/delete/', [ForumPostsController::class, 'forum_posts_delete'])->name('post-delete');

//users
//Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//other
Route::get('/about/', [AboutPageController::class, 'about'])->name('about');

