<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

Route::get('/', [MessagesController::class, 'index'])->name('messages.index');
Route::post('/', [MessagesController::class, 'store'])->name('messages.store');
