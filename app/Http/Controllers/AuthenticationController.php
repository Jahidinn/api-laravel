<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The Provided credentials are incorect.'],
            ]);
        }
        return $user->createToken('User Login')->plainTextToken;
        //return $user->createToken($request->device_name)->plainTextToken;
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    }
}
