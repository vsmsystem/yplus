<?php

use App\Http\Controllers\FinancasApiController;
use App\Http\Controllers\MercadoController;
use App\Http\Controllers\TesteController;
use App\Models\Mercado;
use App\Models\Financas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
  Route::get('/financas', [FinancasApiController::class, "index"] )->name('financas.index');
  Route::get('/teste', [TesteController::class, 'getTeste']);
  Route::get('/mercado', function(){
     //dd(auth()->user()->id);
     $groupId = 99;
    return Mercado::where('id_user', auth()->user()->id)
    ->orWhere('id_group', $groupId)
    ->get();
  } );
});

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
