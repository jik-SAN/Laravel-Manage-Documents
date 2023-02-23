<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',[UserController::class,
	'index']);
Route::post('/import',[UserController::class,
	'import'])->name('import');
Route::get('/export',[UserController::class,
	'exportUsers'])->name('export');
Route::get('/pdf',[UserController::class,
	'downloadPdf'])->name('pdf');