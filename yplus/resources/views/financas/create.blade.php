@extends('layouts.main')
@section('title','Adicionar Registro Financeiro')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading" style="font-weight: 900; font-size:18px">
                Adicionar Item
            </header>
        <form method="post" action="{{ route('financas.store') }}">
            @csrf
            <label for="issue_date">Data da compra</label>
            <input type="date" name="issue_date" id="issue_date">
            <label for="amount">Valor</label>
            <input type="number" name="amount" id="amount" min="1">
            <label for="additional_info">Informação</label>
            <input type="text" name="additional_info" id="additional_info">            
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>
        </section>
    </div>
</div>
@endsection