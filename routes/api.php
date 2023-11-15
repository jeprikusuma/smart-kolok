<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', [App\Http\Controllers\APIController::class, 'index']);
// auth
Route::post('/register', [App\Http\Controllers\AuthAPIController::class, 'register']);
Route::post('/login', [App\Http\Controllers\AuthAPIController::class, 'login']);
Route::get('/activation/{code}', [App\Http\Controllers\AuthAPIController::class, 'activation']);
Route::get('/verification/{email}/{code}', [App\Http\Controllers\AuthAPIController::class, 'verification']);
Route::get('/select_user/{code}', [App\Http\Controllers\AuthAPIController::class, 'select_user']);
// user
Route::prefix('/user/{code}/change/')->group(function () {
    Route::post('/password', [App\Http\Controllers\APIController::class, 'password_change']);
    Route::post('/profile', [App\Http\Controllers\APIController::class, 'profile_change']);
    Route::post('/name', [App\Http\Controllers\APIController::class, 'name_change']);
});
// modul
Route::get('/moduls/{class}', [App\Http\Controllers\APIController::class, 'moduls']);
// quiz
Route::get('/quizzes/{category?}', [App\Http\Controllers\APIController::class, 'quizzes']);
// product
Route::get('/products', [App\Http\Controllers\APIController::class, 'products']);
// social
Route::get('/socials', [App\Http\Controllers\APIController::class, 'socials']);
// art
Route::get('/arts', [App\Http\Controllers\APIController::class, 'arts']);
// dictionary
Route::get('/dictionaries', [App\Http\Controllers\APIController::class, 'dictionaries']);
// wa
Route::get('/wa_get', [App\Http\Controllers\APIController::class, 'wa_get']);