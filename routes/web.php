<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PokedexController;

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

Route::resource('flights', App\Http\Controllers\FlightController::class);

//เข้าหน้าหลัก
Route::get('/pokedex', [PokedexController::class, 'index']);
//กดปุ่มบันทึก
Route::post('/pokedex', [PokedexController::class, 'store'])->name('pokedex.store');
//กดปุ่มลบ
Route::delete('/pokedex/{id}', [PokedexController::class, 'destroy'])->name('pokedex.destroy');
// แก้ไข ดึงข้อมูลเก่ามาโชว์
Route::get('/pokedex/{id}/edit', [PokedexController::class, 'edit'])->name('pokedex.edit');
// รับค่าจากฟอร์มแก้ไขแล้วบันทึกลงฐานข้อมูล
Route::put('/pokedex/{id}', [PokedexController::class, 'update'])->name('pokedex.update');
