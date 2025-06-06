<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CourseController;


Route::middleware(['api'])->group(function () {
    Route::apiResource('courses', CourseController::class);
});
