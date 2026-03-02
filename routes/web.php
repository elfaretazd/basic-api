<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/hello', function () {
    return "Hello Laravel!";
});

Route::get('/about', function () {
    return "Nama: [Elfareta Zabrina Dewi] - NIM: [245150701111015]";
});

Route::get('/home', [HomeController::class, 'index']);