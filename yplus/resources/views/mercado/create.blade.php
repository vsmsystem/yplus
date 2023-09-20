@extends('layouts.main')
@section('title','Adicionar Item')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading" style="font-weight: 900; font-size:18px">
                Adicionar Item
            </header>
        <form method="post" action="{{ route('mercado.store') }}">
            @csrf
            <input type="text" name="nome" id="nome" placeholder="Nome">
            <input type="number" name="qtd" id="qtd" min="1" placeholder="Quantidade">
            <input type="text" name="marca" id="marca" placeholder="Marca">            
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
        </section>
    </div>
</div>
@endsection