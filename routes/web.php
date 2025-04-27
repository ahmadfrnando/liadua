<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [GuestController::class, 'index'])->name('home');
Route::post('/kirim-pesan', [GuestController::class, 'kirim_pesan'])->name('kirim-pesan');
