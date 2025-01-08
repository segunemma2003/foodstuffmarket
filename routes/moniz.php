<?php

use App\Http\Controllers\Frontend\MonizController;
use Illuminate\Support\Facades\Route;

Route::post('update', [MonizController::class, 'update'])->name('moniz.update');

Route::post('filepond/upload/moniz', [MonizController::class, 'uploadImage']);
Route::post('filepond/submit/moniz', [MonizController::class, 'submitImage'])->name('moniz.submit.image');
