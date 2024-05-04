<?php

// routes/web.php

use App\Http\Controllers\OrderController;

Route::get('/', [OrderController::class, 'index'])->name('home');
Route::get('/search', [OrderController::class, 'search'])->name('search');

