<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminContactController;


Route::get('/', [ContactController::class, 'index']);           // 入力
Route::post('/confirm', [ContactController::class, 'confirm']); // 確認
Route::post('/thanks', [ContactController::class, 'store']);     // 保存・完了

Route::get('/admin',  [AdminContactController::class, 'index']);   // 一覧
Route::get('/search', [AdminContactController::class, 'search']);  // 検索
Route::get('/reset',  [AdminContactController::class, 'reset']);   // 検索解除
Route::delete('/delete', [AdminContactController::class, 'destroy']); // 削除
Route::get('/export', [AdminContactController::class, 'export']);  // CSV等

Route::get('/register',  [AuthController::class, 'showRegister']); //認証
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login',  [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);