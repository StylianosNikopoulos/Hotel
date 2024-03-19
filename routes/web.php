<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::any('/', [AdminController::class, 'home']);

Route::any('/home', [AdminController::class, 'index'])->name('home');

Route::any('/create_room', [AdminController::class, 'create_room'])->name('create_room');

Route::any('/add_room', [AdminController::class, 'add_room'])->name('add_room');
