<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', fn() => redirect()->route('menu.index'));

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('menu', MenuController::class);
});
