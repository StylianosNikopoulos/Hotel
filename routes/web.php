<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;



Route::any('/room_details/{id}', [HomeController::class, 'room_details'])->name('room_details');

Route::any('/add_booking/{id}', [HomeController::class, 'add_booking'])->name('add_booking');

Route::any('/contact', [HomeController::class, 'contact'])->name('contact');

Route::any('/about', [HomeController::class, 'about'])->name('about');

Route::any('/send_message', [HomeController::class, 'send_message'])->name('send_message');




Route::any('/', [AdminController::class, 'home']);

Route::any('/all_messages', [AdminController::class, 'all_messages'])->name('all_messages');

Route::any('/send_email/{id}', [AdminController::class, 'send_email'])->name('send_email');

Route::any('/bookings', [AdminController::class, 'bookings'])->name('bookings');

Route::any('/delete_booking/{id}', [AdminController::class, 'delete_booking'])->name('delete_booking');

Route::any('/approve_book/{id}', [AdminController::class, 'approve_book'])->name('approve_book');

Route::any('/reject_book/{id}', [AdminController::class, 'reject_book'])->name('reject_book');

Route::any('/home', [AdminController::class, 'index'])->name('home');

Route::any('/create_room', [AdminController::class, 'create_room'])->name('create_room');

Route::any('/add_room', [AdminController::class, 'add_room'])->name('add_room');

Route::any('/view_room', [AdminController::class, 'view_room'])->name('view_room');

Route::any('/room_delete/{id}', [AdminController::class, 'room_delete'])->name('room_delete');

Route::any('/room_update/{id}', [AdminController::class, 'room_update'])->name('room_update');

Route::any('/edit_room/{id}', [AdminController::class, 'edit_room'])->name('edit_room');

Route::any('/delete_email/{id}', [AdminController::class, 'delete_email'])->name('delete_email');