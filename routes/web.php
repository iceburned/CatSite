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
Route::get('/', [ForumCategoryController::class, 'index']);
Route::get('/create/', [ForumCategoryController::class, 'category_create']);
Route::get('/edit/', [ForumCategoryController::class, 'category_edit']);
Route::get('/delete/', [ForumCategoryController::class, 'category_delete']);

//Topics
Route::get('/topics/', [ForumTopicsController::class, 'forum_topics']);
Route::get('/topics/create/', [ForumTopicsController::class, 'forum_topics_create']);
Route::get('/topics/edit/', [ForumTopicsController::class, 'forum_topics_edit']);
Route::get('/topics/delete/', [ForumTopicsController::class, 'forum_topics_delete']);

//Posts
Route::get('/posts/', [ForumPostsController::class, 'forum_posts']);
Route::get('/posts/create/', [ForumPostsController::class, 'forum_posts_create']);
Route::get('/posts/edit/', [ForumPostsController::class, 'forum_posts_edit']);
Route::get('/posts/delete/', [ForumPostsController::class, 'forum_posts_delete']);

//users
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//other
Route::get('/about/', [AboutPageController::class, 'about']);

