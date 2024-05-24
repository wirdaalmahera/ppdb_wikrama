<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbController;


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
    return view('index');
});

Route::get('/login', [PpdbController::class, 'login'])->name('login');
Route::post('/login', [PpdbController::class, 'auth'])->name('login.auth');
Route::get('/register', [PpdbController::class, 'register'])->name('register');
Route::post('/store', [PpdbController::class, 'store'])->name('store');
Route::get('/dashboard', [PpdbController::class, 'dashboard'])->name('dashboard');
Route::get('/show', [PpdbController::class, 'show'])->name('show');
Route::get('/pdf', [PpdbController::class, 'pdf']);
Route::get('/jurusan', [PpdbController::class, 'jurusan']);
Route::get('/index', [PpdbController::class, 'index']);
Route::get('/payment', [PpdbController::class, 'payment']);
Route::post('/payment', [PpdbController::class, 'inputPayment'])->name('payment.post');
