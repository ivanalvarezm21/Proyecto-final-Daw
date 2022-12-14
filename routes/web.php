<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CochesController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ContactaController;
use \App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Mail;    

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

Auth::routes();

Route::resource("coches", CochesController::class);Auth::routes();

Route::get('contacta',[ContactaController::class, 'index'])->name('contacta.index');

Route::get('/info/{coche}', [\App\Http\Controllers\CochesController::class, 'show'])->name('coches.info');

Route::post('contacta',[ContactaController::class, 'store'])->name('contacta.store');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);
Auth::routes();

Route::get('/paypal/pay', [\App\Http\Controllers\PaymentController::class, 'payWithPaypal'])->name('Pago');

Route::get('/paypal/status', [\App\Http\Controllers\PaymentController::class, 'payPalStatus'])->name('Estado');