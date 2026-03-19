<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
/**
* Controlador de autenticación API
*
* Gestiona el inicio y cierre de sesión mediante tokens de API (LaravelSanctum)
*/
class AuthController extends Controller
{

public function login(Request $request)
{

$request->validate([
'email' => 'required|email', // Email obligatorio yformato válido
'password' => 'required', // Contraseña obligatoria
]);
// Busca al usuario en la base de datos por su email
$user = User::where('email', $request->email)->first();
// Verifica si el usuario existe y si la contraseña es correcta
// Hash::check() compara la contraseña en texto plano con el hashalmacenado
if (! $user || ! Hash::check($request->password, $user->password)) {
// Si las credenciales son incorrectas, retorna un error 401(No autorizado)
return response()->json([
'success' => false,
'message' => 'Credenciales incorrectas.',
], 401);
}
// Genera un nuevo token de acceso para el usuario autenticado
// 'api-token' es el nombre del token (puede ser cualquieridentificador)
// plainTextToken devuelve el token en texto plano (solo visibleuna vez)
$token = $user->createToken('api-token')->plainTextToken;
// Retorna respuesta exitosa con el token y los datos del usuario
return response()->json([
'success' => true,
'access_token' => $token, // Token de acceso para futuras peticiones
'token_type' => 'Bearer', // Tipo de token (se usa en el header Authorization)
'user' => $user // Datos completos del usuario autenticado
]);
}
/**
* Cerrar sesión y revocar token actual
*
* Método HTTP: POST
* Ruta típica: /api/logout
* Requiere: Autenticación mediante token (middleware auth:sanctum)
*
* @param Request $request Contiene el usuario autenticado actual
* @return \Illuminate\Http\JsonResponse Confirmación de cierre desesión
*/
public function logout(Request $request)
{
// Obtiene el token actual que se está usando para la petición
// y lo elimina de la base de datos (lo revoca)
// Esto invalida el token y el usuario deberá hacer login nuevamente
$request->user()->currentAccessToken()->delete();
// Retorna confirmación de que la sesión se cerró correctamente
return response()->json([
'success' => true,
'message' => 'Sesión cerrada correctamente.'
]);
}
}
