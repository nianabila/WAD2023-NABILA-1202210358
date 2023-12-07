<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});


route::get('mobil', [MobilController::class, 'index'])->name('showroom.index');
route::get('mobil/create', [MobilController::class, 'index'])->name('showroom.create');
route::get('mobil/create', [MobilController::class, 'index'])->name('showroom.store');