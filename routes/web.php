<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/sign-up', [FrontController::class, 'signUp'])->name('front.sign.up');
Route::get('/login', [FrontController::class, 'login'])->name('front.login');

Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/buy-now', [FrontController::class, 'buyNow'])->name('front.buy.now');
Route::get('/pricing', [FrontController::class, 'pricing'])->name('front.pricing');
Route::get('/sample-report', [FrontController::class, 'sampleReport'])->name('front.sample.report');
Route::get('/vehicle-history', [FrontController::class, 'vehicleHistory'])->name('front.vehicle.history');
