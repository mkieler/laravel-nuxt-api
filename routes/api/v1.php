<?php

use App\Http\Controllers\Api\V1\TestDataController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Models\TestData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| User API Routes
|--------------------------------------------------------------------------
|
| This is the user API routes used called by the frontend to interact with the user data.
|
*/
Route::controller(UserController::class)
->prefix('/user')
->group(function () {
    Route::get('/', 'getAuthenticatedUser');
    Route::put('/', 'update');
    Route::get('/email-notification-settings', 'getEmailNotificationSettings');
    Route::get('/app-notification-settings', 'getAppNotificationSettings');
    Route::put('/email-notification-settings', 'updateEmailNotificationSettings');
    Route::put('/app-notification-settings', 'updateAppNotificationSettings');
});

Route::controller(CompanyController::class)
->prefix('/company')
->group(function () {
    Route::get('/', 'getCompany');
    Route::put('/', 'update');
    Route::get('/email-notification-settings', 'getEmailNotificationSettings');
    Route::get('/app-notification-settings', 'getAppNotificationSettings');
    Route::put('/email-notification-settings', 'updateEmailNotificationSettings');
    Route::put('/app-notification-settings', 'updateAppNotificationSettings');
});




Route::get('test-data', [TestDataController::class, 'getTestData']);
