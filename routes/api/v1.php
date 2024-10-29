<?php

use App\Http\Controllers\Api\V1\TestDataController;
use App\Http\Controllers\UserController;
use App\Models\TestData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('user', [UserController::class, 'getAuthenticatedUser']);

Route::get('test-data', [TestDataController::class, 'getTestData']);
