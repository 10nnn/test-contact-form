<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminContactController;


Route::get('/', [ContactController::class, 'index']); // 入力
Route::post('/confirm', [ContactController::class, 'confirm']); //確認

