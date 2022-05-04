<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EventsController;


Route::middleware('role:admin')->prefix('admin')->group(function () {
    Route::get('events', [EventsController::class, 'index'])
                ->name('admin.events');
});
