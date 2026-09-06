<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BladeExamplesController;

Route::controller(BladeExamplesController::class)->group(function () {
    Route::get('/', 'index');
});