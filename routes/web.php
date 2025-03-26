<?php

use App\Http\Controllers\CabangController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::prefix()
Route::get('/', function () {
    return view('landing-page');
});


Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user.index');
Route::get('admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
Route::post('admin/user', [UserController::class, 'store'])->name('admin.user.store');
Route::get('/admin/user/{id}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
Route::put('/admin/user/{id}', [UserController::class, 'update'])->name('admin.user.update');
Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');

Route::get('/admin/cabang', [CabangController::class, 'index'])->name('admin.cabang.index');
Route::get('/admin/cabang/create', [CabangController::class, 'create'])->name('admin.cabang.create');
Route::post('/admin/cabang', [CabangController::class, 'store'])->name('admin.cabang.store');
Route::get('/admin/cabang/{id}/edit', [CabangController::class, 'edit'])->name('admin.cabang.edit');
Route::put('/admin/cabang/{id}', [CabangController::class, 'update'])->name('admin.cabang.update');
Route::delete('/admin/cabang/{id}', [CabangController::class, 'destroy'])->name('admin.cabang.destroy');

Route::get('/admin/menu', [MenuController::class, 'index'])->name('admin.menu.index');
Route::get('/admin/menu/create', [MenuController::class, 'create'])->name('admin.menu.create');
Route::post('/admin/menu', [MenuController::class, 'store'])->name('admin.menu.store');
Route::get('/admin/menu/{id}/edit', [MenuController::class, 'edit'])->name('admin.menu.edit');
Route::put('/admin/menu/{id}', [MenuController::class, 'update'])->name('admin.menu.update');
Route::delete('/admin/menu/{id}', [MenuController::class, 'destroy'])->name('admin.menu.destroy');

Route::get('/admin/paket', [PaketController::class, 'index'])->name('admin.paket.index');
Route::get('/admin/paket/create', [PaketController::class, 'create'])->name('admin.paket.create');
Route::post('/admin/paket', [PaketController::class, 'store'])->name('admin.paket.store');
Route::get('/admin/paket/{id}/edit', [PaketController::class, 'edit'])->name('admin.paket.edit');
Route::put('/admin/paket/{id}', [PaketController::class, 'update'])->name('admin.paket.update');
Route::delete('/admin/paket/{id}', [PaketController::class, 'destroy'])->name('admin.paket.destroy');
