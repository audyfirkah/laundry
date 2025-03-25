<?php

use App\Http\Controllers\CabangController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::prefix()
Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user.index');
Route::get('/admin/cabang', [CabangController::class, 'index'])->name('admin.cabang.index');
Route::get('/admin/menu', [MenuController::class, 'index'])->name('admin.menu.index');
Route::get('/admin/paket', [PaketController::class, 'index'])->name('admin.paket.index');
