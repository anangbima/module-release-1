<?php

use Illuminate\Support\Facades\Route;
use Modules\ModuleRelease1\Http\Controllers\Web\Guest\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('index');