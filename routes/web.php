<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// home page view
Route::get('/', function () {
    return view('index');
})->middleware('auth');

// Show sign up form
Route::get('/register', [UserController::class, 'create'])->name('login')->middleware('guest');

// Register User
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
