<?php

namespace App\Http\Controllers;

use App\Models\Financas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FinancasApiController extends Controller
{
    public function index(){
        return Financas::all();
    }

    public function criarTransacao(Request $request)
{
    $data = $request->json()->all();

    $transacao = Financas::create([
        'additional_info' => $data['additional_info'],
        'amount' => $data['amount'],
        'url' => $data['url'],
        'issue_date' => $data['date'],
    ]);



    return response()->json(['message' => 'Transação criada com sucesso', 'data' => $transacao], 201);
}
    



}


