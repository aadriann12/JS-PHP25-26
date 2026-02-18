<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
public function login(Request $request){




    $user=User::where('email',$request->email)->first();


    if (!$user||!Hash::check($request->password,$user->password )) {
        return response()->json([
            'success'=>false,
            'message'=>'no se ha podido iniciar sesion'
        ],401);



    }

$token=$user->createToken('api-token')->plainTextToken;
return response()->json([
    'success'=>true,
    'access_token'=>$token,
    'token_type'=>'Bearer',
    'user'=>$user
]);
}

public function logout(Request $request){
    $request->user()->currentAccessToken()->delete();
    return response()->json([
        'success'=>true,
        'message'=>'logout correcto'
    ]);
}
}
