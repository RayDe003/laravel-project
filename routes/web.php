<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateClient;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

//Route::get('/', function () {
//    return ('welcome');
//});

Route::get('/', [AuthController::class, 'showAuthPage'])->name('auth');

Route::get('/login', [AuthController::class, 'showAuthForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/choose', [CreateClient::class, 'showChoosePage'])->name('second');

Route::get('/client-form', [CreateClient::class, 'showClientForm'])->name('client-form');
Route::post('/client', [CreateClient::class, 'client'])->name('client');

Route::get('/order-form', [OrderController::class, 'showOrderForm'])->name('order-form');
Route::post('/order', [OrderController::class, 'storeOrder'])->name('store-order');
