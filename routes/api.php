<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

//We are creating a POST method to insert the data. 
Route::post('/blog', [ApiController::class, 'create']);// This line point create function in the blog_api_controller(This will handle the post method);

