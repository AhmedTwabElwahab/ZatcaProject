<?php

use App\Http\Controllers\ZatcaIntegrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/zatca', [ZatcaIntegrationController::class, 'index'])->name('zatca');
