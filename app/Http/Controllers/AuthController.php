<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('MyApp')->plainTextToken;
            
            return response()->json(['token' => $token]);
        }
        
        return response()->json(['error' => 'Invalid credentials'], 401);
    }
    
    public function register(Request $request)
    {
        // Logique d'inscription et création d'un nouvel utilisateur
        
        return response()->json(['message' => 'User registered successfully']);
    }
    
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        
        return response()->json(['message' => 'Logged out successfully']);
    }
}
