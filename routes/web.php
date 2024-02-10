<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
});


Route::get('register', function () { return view('auth.register'); })->middleware('guest')->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('login', function () { return view('auth.login'); })->middleware('guest')->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('dashboard', function () { return view('dashboard'); })->middleware('auth')->name('dashboard');



Route::get('/home', [HomeController::class, 'index']);

