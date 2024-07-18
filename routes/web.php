<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\UserController;

Route::resource('/todo', TodosController::class);
// Route::resource('/users', UserController::class);
