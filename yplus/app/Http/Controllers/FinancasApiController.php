<?php

namespace App\Http\Controllers;

use App\Models\Financas;
use App\Models\FinancasItens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;

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

    public function criarTransacaoItens(Request $request)
    {
        $data = $request->json()->all();

        // Remover vírgulas dos valores numéricos
        $data['totalSomado'] = str_replace(',', '', $data['totalSomado']);

        // Convertendo a data para o formato de banco de dados (datetime)
        $dataEmissaoFormatted = Carbon::createFromFormat('d/m/Y H:i:s', $data['dataEmissao'])->format('Y-m-d H:i:s');
        
        // Verificar se já existe um registro com os mesmos valores
        $existingTransaction = Financas::where('organization_name', $data['estabelecimento'])
        ->where('issue_date', $dataEmissaoFormatted)
        ->where('amount', $data['totalSomado'])
        ->first();

        if ($existingTransaction) {
            return response()->json(['message' => 'Item duplicado'], 422);
        }        

        $validator = Validator::make($data, [
            'estabelecimento' => 'required|string',
            'cnpj' => 'required|string',
            'endereco' => 'required|string',
            'dataEmissao' => 'required|date_format:d/m/Y H:i:s', 
            'totalSomado' => 'required|string',
            'itens' => 'required|array',
            'itens.*.nome' => 'required|string',
            'itens.*.codigo' => 'required|integer',
            'itens.*.quantidade' => 'required|integer',
            'itens.*.tipoQuantidade' => 'required|string',
            'itens.*.valorUnitario' => 'required|string',
            'itens.*.valor' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }


        // Salvar transação principal na tabela financial_transactions
        $transaction = Financas::create([
            'organization_name' => $data['estabelecimento'],
            'cnpj_cpf' => $data['cnpj'],
            'address' => $data['endereco'],
            'issue_date' => $dataEmissaoFormatted,
            'amount' => $data['totalSomado'],
        ]);

        // Salvar itens na tabela financial_transactions_items
        foreach ($data['itens'] as $item) {
            FinancasItens::create([
                'id_financial_transaction' => $transaction->id,
                'name' => $item['nome'],
                'code' => $item['codigo'],
                'quantity' => $item['quantidade'],
                'quantity_type' => $item['tipoQuantidade'],
                'unit_value' => str_replace(',', '', $item['valorUnitario']),
                'amount' => str_replace(',', '', $item['valor']),
            ]);
        }

        return response()->json(['message' => 'Transação completa salva com sucesso'], 201);
    }
    
}


