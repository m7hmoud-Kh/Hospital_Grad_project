<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Auth::routes(['register'=>false]);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware'=> ['auth','role:sick']], function () {

    Route::get('/all-follow', [HomeController::class, 'allFollow'])->name('all.follow');
    Route::get('/sick_follow_details/{follow_id}', [HomeController::class, 'followDetails'])->name('followdetailsSick');
    Route::post('/status_surgey/{surgey_id}', [HomeController::class, 'changeStatus'])->name('surgey.status');

    Route::get('change-password', [HomeController::class, 'changePassword'])->name('change.password');

    Route::post('update-password-sick', [HomeController::class, 'updatePasswordSick'])->name('password.sick');
});

