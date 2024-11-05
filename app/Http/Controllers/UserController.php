<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAuthenticatedUser(Request $request)
    {
        return $request->user();
    }

    public function update(Request $request)
    {
        $user = $request->user();
        $user->update($request->all());
        return $user;
    }
}
