<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController
{

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password')))
        {
            $token = Auth::user()->createToken('ali-apiToken')->plainTextToken;
            $r = response()->json(['success' => [ 'token' => $token , 'name' => Auth::user()->name ]]);
        }else {
            $r = response()->json(['message' => 'Identifiants invalides'], 401);
        }
        return $r;
    }

    public function register(Request $request)
    {
        //
    }

}
