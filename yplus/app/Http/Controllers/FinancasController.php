<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Financas;
use Illuminate\Support\Facades\Auth;

class FinancasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $itens = Financas::all();
        return view('financas.index', compact('itens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('financas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            // Obter o ID do usuário autenticado
            $userId = Auth::id();
            
            // Define as regras de validação
            $rules = [
                'date' => 'date_format:d/m/Y', // O campo data da compra deve estar no formato dd/mm/aaaa
                'amount' => 'required|integer|min:1', // O campo 'qtd' é obrigatório e deve ser um número inteiro maior ou igual a 1
                'info' => 'nullable', // O campo 'marca' é opcional
            ];
        
            // Mensagens de erro personalizadas (opcional)
            $messages = [
                'amount.min' => 'O valor deve ser no mínimo 1.',
                'date.date_format' => 'O campo data da compra deve estar no formato dd/mm/aaaa',
            ];
        
            // Valide os dados do formulário com as regras definidas
            $request->validate($rules, $messages);
        
            // Se a validação for bem-sucedida, você pode prosseguir com a inserção no banco de dados
            // Por exemplo:
            
            
            financas::create([
                'issue_date' => $request->input('issue_date'),
                'amount' => $request->input('amount'),
                'additional_info' => $request->input('additional_info'),
                'id_user' => $userId,
            ]);
        
        return redirect()->route('financas.index')->with('success', 'Item adicionado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Financas::find($id);
        if (!$item) {
            return redirect()->route('financas.index')->with('error', 'Item não encontrado.');
        }
    
        return view('financas.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Financas::find($id);

        if(!$item){
            return redirect()->route('financas.index')->with('error', 'Item não encontrado.');
        }
        //Atualizando campos do item
        $item->issue_date = $request->input('date');
        $item->amount = $request->input('amount');
        $item->additional_info = $request->input('info');

        $item->save();
        return redirect()->route('financas.index')->with('success','Item atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
       $item = Financas::find($id);
       if (!$item){
        return redirect()->back()->with('error', 'Item não encontrado');
       }
       $item->delete();
       return redirect()->route('financas.index')->with('success', 'Item removido com sucesso.');
    }
}
