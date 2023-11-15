<?php

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

Route::get('/', function () {
    return view('welcome');
});
// forget password
Route::get('/forget-password/send/{email}', [App\Http\Controllers\AuthAPIController::class, 'reset_password_send']);
Route::get('/forget-password/{code}', [App\Http\Controllers\AuthAPIController::class, 'forget_password']);
Route::post('/forget-password/{code}', [App\Http\Controllers\AuthAPIController::class, 'reset_password']);
// login
Route::get('/login', [App\Http\Controllers\AuthController::class, 'index']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout']);

// admin
Route::prefix('admin')->group(function () {
    // beranda
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);
    // user
    Route::get('/user', [App\Http\Controllers\AdminController::class, 'user']);
    Route::get('/user/active/{id}', [App\Http\Controllers\AdminController::class, 'user_active']);
    Route::get('/user/delete/{id}', [App\Http\Controllers\AdminController::class, 'user_delete']);
    // modul
    Route::prefix('/modul/{class}')->group(function () {
        Route::get('/', [App\Http\Controllers\AdminController::class, 'modul']);
        Route::get('/add', [App\Http\Controllers\AdminController::class, 'modul_new']);
        Route::post('/add', [App\Http\Controllers\AdminController::class, 'modul_add']);
        Route::get('/delete/{id}', [App\Http\Controllers\AdminController::class, 'modul_delete']);
        Route::get('/edit/{id}', [App\Http\Controllers\AdminController::class, 'modul_new']);
        Route::post('/edit/{id}', [App\Http\Controllers\AdminController::class, 'modul_edit']);
    });
    // quiz
    Route::prefix('/quiz/{category}')->group(function () {
        Route::get('/', [App\Http\Controllers\AdminController::class, 'quiz']);
        Route::get('/add', [App\Http\Controllers\AdminController::class, 'quiz_new']);
        Route::post('/add', [App\Http\Controllers\AdminController::class, 'quiz_add']);
        Route::get('/delete/{id}', [App\Http\Controllers\AdminController::class, 'quiz_delete']);
        Route::get('/edit/{id}', [App\Http\Controllers\AdminController::class, 'quiz_new']);
        Route::post('/edit/{id}', [App\Http\Controllers\AdminController::class, 'quiz_edit']);
    });
    // product
    Route::prefix('/product')->group(function () {
        Route::get('/', [App\Http\Controllers\AdminController::class, 'product']);
        Route::get('/add', [App\Http\Controllers\AdminController::class, 'product_new']);
        Route::post('/add', [App\Http\Controllers\AdminController::class, 'product_add']);
        Route::get('/delete/{id}', [App\Http\Controllers\AdminController::class, 'product_delete']);
        Route::get('/edit/{id}', [App\Http\Controllers\AdminController::class, 'product_new']);
        Route::post('/edit/{id}', [App\Http\Controllers\AdminController::class, 'product_edit']);

    });
    // social
    Route::prefix('/social')->group(function () {
        Route::get('/', [App\Http\Controllers\AdminController::class, 'social']);
        Route::get('/add', [App\Http\Controllers\AdminController::class, 'social_new']);
        Route::post('/add', [App\Http\Controllers\AdminController::class, 'social_add']);
        Route::get('/delete/{id}', [App\Http\Controllers\AdminController::class, 'social_delete']);
        Route::get('/edit/{id}', [App\Http\Controllers\AdminController::class, 'social_new']);
        Route::post('/edit/{id}', [App\Http\Controllers\AdminController::class, 'social_edit']);

    });
    // art
    Route::prefix('/art')->group(function () {
        Route::get('/', [App\Http\Controllers\AdminController::class, 'art']);
        Route::get('/add', [App\Http\Controllers\AdminController::class, 'art_new']);
        Route::post('/add', [App\Http\Controllers\AdminController::class, 'art_add']);
        Route::get('/delete/{id}', [App\Http\Controllers\AdminController::class, 'art_delete']);
        Route::get('/edit/{id}', [App\Http\Controllers\AdminController::class, 'art_new']);
        Route::post('/edit/{id}', [App\Http\Controllers\AdminController::class, 'art_edit']);

    });
    // dictionary
    Route::prefix('/dictionary')->group(function () {
        Route::get('/', [App\Http\Controllers\AdminController::class, 'dictionary']);
        Route::get('/add', [App\Http\Controllers\AdminController::class, 'dictionary_new']);
        Route::post('/add', [App\Http\Controllers\AdminController::class, 'dictionary_add']);
        Route::get('/delete/{id}', [App\Http\Controllers\AdminController::class, 'dictionary_delete']);
        Route::get('/edit/{id}', [App\Http\Controllers\AdminController::class, 'dictionary_new']);
        Route::post('/edit/{id}', [App\Http\Controllers\AdminController::class, 'dictionary_edit']);

    });
    // setting
    Route::prefix('/setting')->group(function () {
        Route::get('/', [App\Http\Controllers\AdminController::class, 'setting']);
        Route::post('/change/wa/{key}', [App\Http\Controllers\AdminController::class, 'wa_change']);
        Route::post('/change/password/{key}', [App\Http\Controllers\AdminController::class, 'password_change']);
    });
    // about
    Route::get('/about', [App\Http\Controllers\AdminController::class, 'about']);
    // logout
    Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout']);
});
