<?php

use App\Http\Controllers\MachinesController;
use App\Http\Controllers\PMOCController;
use Illuminate\Support\Facades\Route;

Route::get('machines', [MachinesController::class, 'index'])->name('index.machines');
Route::get('machines/{id}', [MachinesController::class, 'show'])->name('show.machine');
Route::post('pmoc', [PMOCController::class, 'store'])->name('store.pmoc');

Route::get('/', function () {
    return view('welcome');
});
