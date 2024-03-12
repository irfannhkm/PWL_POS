<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']); //menampilkan semua data level
Route::get('/kategori', [KategoriController::class, 'index']); 
Route::get('/user', [UserController::class, 'index']); 