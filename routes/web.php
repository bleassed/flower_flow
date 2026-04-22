<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressingController;

Route::get('/', [AddressingController::class, 'index']);
