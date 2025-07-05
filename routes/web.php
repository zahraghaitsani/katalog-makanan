<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('menu.index'); 
    }
    return view('welcome'); 
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('menu', MenuController::class);
});
