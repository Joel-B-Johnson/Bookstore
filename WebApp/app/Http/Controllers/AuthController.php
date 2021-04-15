<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $fields = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'username' => 'required|string|unique:users,username',
            'email' => 'required|string|unique:users,email',
            'phone' => 'required|string',
            'password' => 'required|string|confirmed',
            'admin' => 'required|boolean',
            'deleated' => 'required|boolean'
        ]);

        $user = User::create([
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'username' => $fields['username'],
            'email' => $fields['email'],
            'phone' => $fields['phone'],
            'password' => bcrypt($fields['password']),
            'admin' => $fields['admin'],
            'deleated' => $fields['deleated'],
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $responce = [
            'user' => $user,
            'token' => $token
        ];

        return response($responce, 201);
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();
    
        return [
            'message' => 'Logged out'
        ];
    }

    public function login(Request $request)
    {
        
    }
}
