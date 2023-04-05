<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Auth::routes(['register'=>false]);

Route::get('/', [HomeController::class, 'index'])->name('home');


