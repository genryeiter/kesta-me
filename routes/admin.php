<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\UsersController;

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('events', [EventsController::class, 'index'])->name('admin.events');

    Route::get('users', [UsersController::class, 'index'])->name('admin.users');
    Route::get('users/create', [UsersController::class, 'create'])->name('admin.users.create');
    Route::get('users/{user}', [UsersController::class, 'edit'])->name('admin.users.edit');
    Route::put('users/{user}', [UsersController::class, 'update'])->name('admin.users.update');
    Route::post('users', [UsersController::class, 'store'])->name('admin.users.store');
    Route::delete('users/{user}', [UsersController::class, 'destroy'])->name('admin.users.destroy');
});
