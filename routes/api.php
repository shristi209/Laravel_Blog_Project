<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/{id}', [BlogController::class, 'show']);
Route::post('/blogs', [BlogController::class, 'store']);
Route::put('/blogs/{id}/{category_name}', [BlogController::class, 'update']);
Route::delete('/blogs/{id}', [BlogController::class, 'destroy']);