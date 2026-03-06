<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
 public function Login(Request $request){
    $credentials=$request->validate([
        'email'=>'required|email',
        'password'=>'required'
    ]);

    if(!auth()->attempt($credentials)){
        return response()->json([
            'success'=>false,
            'message'=>'Credenciales inválidas'
        ],401);
    }

    $user=auth()->user();
    $token=$user->createToken('api-token')->plainTextToken;

    return response()->json([
        'success'=>true,
        'data'=>[
            'user'=>$user,
            'token'=>$token
        ]
    ],200);
 }
}
