<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang di Laravel';
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/sapa', [HomeController::class, 'sapa']);
