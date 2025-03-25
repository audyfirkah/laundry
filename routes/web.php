<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::prefix()
Route::get('/', [UserController::class, 'index'])->name('user.index');
