<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/test', [MainController::class, 'store']);
Route::get('/patates', function() {
    return view('test');
});
