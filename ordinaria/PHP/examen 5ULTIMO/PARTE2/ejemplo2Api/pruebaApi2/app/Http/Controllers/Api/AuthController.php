<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
	public function login(Request $request)
	{
		$request->validate([ 'email' => 'required|email', 'password' => 'required' ]);
// Busca al usuario por su email
		$user = User::firstWhere('email', $request->email);
// Verifica si el usuario existe y si la contraseña es correcta
		if (! $user || ! Hash::check($request->password, $user->password)) {
            // Si las credenciales son incorrectas, retorna un error 401 (No autorizado)
			return response()->json(['success' => false, 'message' => 'Credenciales incorrectas.'], 401);
		}
//
		return response()->json([
			'success' => true,
			'access_token' => $user->createToken('api-token')->plainTextToken,
			'token_type' => 'Bearer',
			'user' => $user,
		]);
	}

	public function logout(Request $request)
	{
		$request->user()->currentAccessToken()->delete();

		return response()->json(['success' => true, 'message' => 'Sesión cerrada correctamente.']);
	}
}
