<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('user', [UserController::class, 'getAuthenticatedUser']);

Route::get('test-data', function () {
    sleep(10);
    return response()->json([
        [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'age' => 30,
        ],[
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'age' => 25,
        ],[
            'name' => 'Harry Potter',
            'email' => 'hp@example.com',
            'age' => 15,
        ]
    ]);
});
