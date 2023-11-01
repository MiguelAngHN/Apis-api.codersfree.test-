<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\Api\RegistrerController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/home', function () {
    return ('welcome 👌');
});

// Route::post('register',[RegistrerController::class,'store'])->name('api.v1.register');


Route::get('categories', [CategoryController::class,'index'])->name('api.v1.categories.index');
Route::post('categories', [CategoryController::class,'store'])->name('api.v1.categories.store');
Route::get('categories/{category}', [CategoryController::class,'show'])->name('api.v1.categories.show');
Route::put('categories/{category}', [CategoryController::class,'update'])->name('api.v1.categories.update');
Route::delete('categories/{category}', [CategoryController::class,'destroy'])->name('api.v1.categories.delete');

Route::get('users', [UserController::class,'index'])->name('api.v1.users.index');
Route::post('users', [UserController::class,'store'])->name('api.v1.users.store');
Route::get('users/{user}', [UserController::class,'show'])->name('api.v1.users.show');
Route::put('users/{user}', [UserController::class,'update'])->name('api.v1.users.update');
Route::delete('users/{user}', [UserController::class,'destroy'])->name('api.v1.users.delete');

Route::get('posts', [PostController::class,'index'])->name('api.v1.posts.index');
Route::post('posts', [PostController::class,'store'])->name('api.v1.posts.store');
Route::get('posts/{post}', [PostController::class,'show'])->name('api.v1.posts.show');
Route::put('posts/{post}', [PostController::class,'update'])->name('api.v1.posts.update');
Route::delete('posts/{post}', [PostController::class,'destroy'])->name('api.v1.posts.delete');

Route::get('tags', [TagController::class,'index'])->name('api.v1.tags.index');
Route::post('tags', [TagController::class,'store'])->name('api.v1.tags.store');
Route::get('tags/{tag}', [TagController::class,'show'])->name('api.v1.tags.show');
Route::put('tags/{tag}', [TagController::class,'update'])->name('api.v1.tags.update');
Route::delete('tags/{tag}', [TagController::class,'destroy'])->name('api.v1.tags.delete');

Route::get('images', [ImageController::class,'index'])->name('api.v1.images.index');
Route::post('images', [ImageController::class,'store'])->name('api.v1.images.store');
Route::get('images/{tag}', [ImageController::class,'show'])->name('api.v1.images.show');
Route::put('images/{tag}', [ImageController::class,'update'])->name('api.v1.images.update');
Route::delete('images/{tag}', [ImageController::class,'destroy'])->name('api.v1.images.delete');