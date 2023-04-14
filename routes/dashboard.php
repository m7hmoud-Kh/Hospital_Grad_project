<?php

use App\Http\Controllers\Dashboard\AttachmentController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\FollowController;
use App\Http\Controllers\Dashboard\SickController;
use App\Http\Controllers\Dashboard\SurgeryController;
use Illuminate\Support\Facades\Route;




Route::group(['middleware' => ['auth', 'role:head_of_hospital|doctor']], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


    Route::get('profile', [DashboardController::class, 'show_profile'])->name('profile');

    Route::post('profile/update-personal',
    [DashboardController::class, 'updatePersnoalInfo'])->name('profile.update.personal');
    Route::post('profile/update-security',
    [DashboardController::class , 'updateSecurityInfo'])
    ->name('profile.update.security');


});

Route::group(['middleware'=>['auth','role:head_of_hospital']], function () {
    Route::get('create-doctor', [DoctorController::class, 'create'])->name('doctor.create');
    Route::post('doctor', [DoctorController::class, 'store'])->name('doctor.store');
    Route::get('doctor', [DoctorController::class, 'index'])->name('doctor.index');
    Route::delete('doctor/{id}', [DoctorController::class, 'destory'])->name('doctor.destory');

});


Route::group(['middleware'=>['auth','role:doctor']], function () {
    Route::get('create-sick', [SickController::class, 'create'])->name('sick.create');
    Route::post('sick', [SickController::class, 'store'])->name('sick.store');
    Route::get('sick', [SickController::class, 'index'])->name('sick.index');
    Route::delete('sick/{id}', [SickController::class, 'destory'])->name('sick.destory');



    Route::get('all-follow', [FollowController::class, 'index'])->name('follow.index');
    Route::get('create-follow/{sick_id}', [FollowController::class, 'create'])->name('follow.create');
    Route::post('store-follow/{sick_id}', [FollowController::class, 'store'])->name('follow.store');
    Route::get('details-follow/{follow_id}', [FollowController::class, 'getDetails'])->name('follow.details');
    Route::get('follow-edit/{follow_id}', [FollowController::class, 'edit'])
    ->name('follow.edit')->middleware('doctor_only_update');

    Route::put('update-follow/{follow_id}', [FollowController::class, 'update'])->name('follow.update');


    Route::post('store-surgery/{follow_id}', [SurgeryController::class, 'store'])->name('surgery.store');



    Route::post('store-attachment/{follow_id}', [AttachmentController::class, 'store'])->name('attachment.store');
});





