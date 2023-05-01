<?php

use App\Http\Controllers\TesteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/teste', [TesteController::class, 'getTeste']);

Route::middleware('auth:sanctum')->get('/usuario', function (Request $request) {
  return $request->user();
});

Route::post('/login', function (Request $request) {
  if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
    $user = Auth::user();
    $token = $user->createToken('JWT');
    return response()->json(["token" => $token->plainTextToken], 200);
  }
  return response()->json(["nop"], 401);
});
