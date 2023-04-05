<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DoctorController;
use Illuminate\Support\Facades\Route;




Route::group(['middleware' => ['auth', 'role:head_of_hospital|doctor']], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

});

Route::group(['middleware'=>['auth','role:head_of_hospital']], function () {
    Route::get('create-doctor', [DoctorController::class, 'create'])->name('doctor.create');
    Route::post('doctor', [DoctorController::class, 'store'])->name('doctor.store');
    Route::get('doctor', [DoctorController::class, 'index'])->name('doctor.index');
    Route::delete('doctor/{id}', [DoctorController::class, 'destory'])->name('doctor.destory');

    Route::get('profile', [DashboardController::class, 'show_profile'])->name('profile');

    Route::post('profile/update-personal',
    [DashboardController::class, 'updatePersnoalInfo'])->name('profile.update.personal');
    Route::post('profile/update-security',
    [DashboardController::class , 'updateSecurityInfo'])
    ->name('profile.update.security');

});




