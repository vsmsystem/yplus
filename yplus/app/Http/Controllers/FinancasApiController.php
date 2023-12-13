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


    public function criarTransacao(Request $request){
        $data = $request->json()->all();

        $validator = Validator::make($data, [
            'additional_info' => 'required|string',
            'amount' => 'integer',
            'date' => 'date',
            'url' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $transacao = new Financas();
        $transacao->additional_info = $data['additional_info'];
        $transacao->amount = $data['amount'];
        $transacao->url = $data['url'];
        $transacao->issue_date = $data['date'];

        $transacao->save();

        return response()->json(['message' => 'Transação criada com sucesso', 'data' => $transacao], 201);
    }
    
}


