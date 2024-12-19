<?php

use App\Http\Controllers\CochesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});


Route::resource('coches', CochesController::class);

