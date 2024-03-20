<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;


Route::any('/', [AdminController::class, 'home']);

Route::any('/home', [AdminController::class, 'index'])->name('home');

Route::any('/create_room', [AdminController::class, 'create_room'])->name('create_room');

Route::any('/add_room', [AdminController::class, 'add_room'])->name('add_room');

Route::any('/view_room', [AdminController::class, 'view_room'])->name('view_room');

Route::any('/room_delete/{id}', [AdminController::class, 'room_delete'])->name('room_delete');

Route::any('/room_update/{id}', [AdminController::class, 'room_update'])->name('room_update');

Route::any('/edit_room/{id}', [AdminController::class, 'edit_room'])->name('edit_room');

Route::any('/room_details/{id}', [HomeController::class, 'room_details'])->name('room_details');



