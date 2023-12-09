<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mercado;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MercadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itens = Mercado::where( function($query){
            $query-> where('id_user', auth()->user()->id)
            ->orWhereIn('id_group', auth()->user()->groups->pluck('id')->toArray());
        })
        ->whereNull('deleted_at')
        ->get();

        return view('mercado.index', compact('itens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mercado.create');
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
                'nome' => 'required', // O campo 'nome' é obrigatório
                'qtd' => 'required|integer|min:1', // O campo 'qtd' é obrigatório e deve ser um número inteiro maior ou igual a 1
                'marca' => 'nullable', // O campo 'marca' é opcional
            ];
        
            // Mensagens de erro personalizadas (opcional)
            $messages = [
                'qtd.min' => 'A quantidade deve ser no mínimo 1.',
            ];
        
            // Valide os dados do formulário com as regras definidas
            $request->validate($rules, $messages);
        
            // Se a validação for bem-sucedida, você pode prosseguir com a inserção no banco de dados
            // Por exemplo:

            
            mercado::create([
                'nome' => $request->input('nome'),
                'quantidade' => $request->input('qtd'),
                'marca' => $request->input('marca'),
                'id_user' => $userId,
            ]);
        
        return redirect()->route('mercado.index')->with('success', 'Item adicionado com sucesso.');
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
        $item = Mercado::find($id);
        if (!$item) {
            return redirect()->route('mercado.index')->with('error', 'Item não encontrado.');
        }
    
        return view('mercado.edit', ['item' => $item]);
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
        $item = Mercado::find($id);

        if(!$item){
            return redirect()->route('mercado.index')->with('error', 'Item não encontrado.');
        }
        //Atualizando campos do item
        $item->nome = $request->input('nome');
        $item->quantidade = $request->input('qtd');
        $item->marca = $request->input('marca');

        $item->save();
        return redirect()->route('mercado.index')->with('success','Item atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $item = Mercado::find($id);

        if(!$item){
            return redirect()->route('mercado.index')->with('error', 'Item não encontrado.');
        }
        //Atualizando campos do item
        $item->deleted_at = date('Y-m-d H:i:s');

        $item->save();
        return redirect()->route('mercado.index')->with('success','Item deletado com sucesso!');
    }
}
