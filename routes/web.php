<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function () {
    return view('template.default');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::get('/calculate', [App\Http\Controllers\MyController::class, 'inFo']);
Route::post('/calculate', [App\Http\Controllers\MyController::class, 'calculate']);
Route::get('/workshop', [MyController::class, 'index']);
Route::post('/workshop/store', [MyController::class, 'store'])->name('workshop.store');
