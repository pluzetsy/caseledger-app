<?php

use App\Http\Controllers\Api\PingController;
use Illuminate\Support\Facades\Route;
use App\Modules\Users\Http\Controllers\UserController;

Route::get('/ping', PingController::class);

Route::post('/users', [UserController::class, 'store']);
