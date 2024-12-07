<?php

use App\Http\Controllers\TPController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TPController::class, 'index']);
Route::get('/create', [TPController::class, 'create']);
Route::post('/store', [TPController::class, 'store']);
Route::get('/post/{id}', [TPController::class, 'show']);
Route::get('/edit/{id}', [TPController::class, 'edit']);
Route::post('/update/{id}', [TPController::class, 'update']);
Route::delete('/delete/{id}', [TPController::class, 'destroy']);
