<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::any('/', [AdminController::class, 'home']);

Route::any('/home', [AdminController::class, 'index'])->name('home');
