<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;

Route::get('/', function () {
    return view('index');
});


//Localization Route

Route::get('locale/{lange}', [LocalizationController::class, 'setLang']);
