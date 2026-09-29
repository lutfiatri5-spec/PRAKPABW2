<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BanjirController;

Route::get('/', function () {
    return view('laporbanjir');
});

Route::get('/laporbanjir', [BanjirController::class, 'form']);
Route::post('/laporbanjir/proses', [BanjirController::class, 'proses']);