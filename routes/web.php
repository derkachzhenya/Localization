<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/localization', [LocalizationController::class, 'index'])->name('localization.index');
