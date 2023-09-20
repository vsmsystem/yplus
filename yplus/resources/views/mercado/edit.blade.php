@extends('layouts.main')
@section('title','Editar Item')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading" style="font-weight: 900; font-size:18px">
                    Editar Item
                </header>
                    <form method="post" action="{{ route('mercado.update',['id' => $item->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" value="{{ $item->nome }}">
                        </div>
                        <div class="form-group">
                            <label for="nome">Quantidade</label>
                            <input type="text" class="form-control" name="qtd" id="qtd" value="{{ $item->quantidade }}">
                        </div>
                        <div class="form-group">
                            <label for="nome">Marca</label>
                            <input type="text" class="form-control" name="marca" id="marca" value="{{ $item->marca }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Concluir</button>
                    </form>
            </section>
        </div>
    </div>
@endsection