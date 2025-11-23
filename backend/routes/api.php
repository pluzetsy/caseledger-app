<?php

use App\Http\Controllers\Api\PingController;
use Illuminate\Support\Facades\Route;

Route::get('/ping', PingController::class);
