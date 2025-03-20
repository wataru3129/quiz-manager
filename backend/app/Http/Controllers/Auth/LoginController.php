<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // dd($credentials);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            $success['token'] =  $user->createToken('MyApp')->plainTextToken;
            $success['email'] =  $user->email;
            return response()->json($success, 200);
        }

        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);
    }
}
