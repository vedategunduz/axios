<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::post('test', [MainController::class, 'store']);
