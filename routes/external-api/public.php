<?php 

use Illuminate\Support\Facades\Route;
use Modules\ModuleRelease1\Http\Controllers\Api\External\UserController;

// User data 
Route::get('/users', [UserController::class, 'index']);