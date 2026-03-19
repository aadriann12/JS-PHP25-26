<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
   public function login(Request $request){
	// Validate explicitly and return JSON errors to avoid HTML redirects
	$validator = Validator::make($request->all(), [
		'email' => 'required|email',
		'password' => 'required'
	]);

	if ($validator->fails()) {
		return response()->json(['errors' => $validator->errors()], 422);
	}

	$user = User::where('email', $request->email)->first();
	if(!$user || !Hash::check($request->password,$user->password)){
		return response()->json(['message'=>'Credenciales incorrectas'],401);
	}

	$token = $user->createToken('auth_token')->plainTextToken;
	return response()->json([
		'access_token' => $token,
		'token_type' => 'Bearer'
	]);

}
public function logout(Request $request){
	$request->user()->currentAccessToken()->delete();
	return response()->json(['message'=>'Sesión cerrada correctamente']);
}
}