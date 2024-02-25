<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

//We are creating a POST method to insert the data. 
Route::post('/blogcreate', [ApiController::class, 'create']);// This line point create function in the blog_api_controller(This will handle the post method);

Route::get('/blogall', [ApiController::class, 'read']);

Route::get('/blogbyid/{id}', [ApiController::class, 'readbyid']);

Route::put('/blogupdate/{id}',[ApiController::class,'updatebyid']);