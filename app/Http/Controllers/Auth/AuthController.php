<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;

class AuthController extends Controller
{

    const AUTH_TOKEN_NAME = 'AuthToken';

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['email', 'required'],
            'password' => ['required']
        ]);

        $access = Auth::attempt($credentials);
        throw_if(!$access, new UnauthorizedException('Credenciales incorrectas'));

        $token = $request->user()->createToken(self::AUTH_TOKEN_NAME);
        return response()->json([
            'token' => $token->plainTextToken,
            'expiressIn' => config('sanctum.expiration') * 60
        ]);
    }
}
