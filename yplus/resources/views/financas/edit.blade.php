@extends('layouts.main')
@section('title','Editar Registro')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading" style="font-weight: 900; font-size:18px">
                    Editar Registro
                </header>
                    <form method="post" action="{{ route('financas.update',['id' => $item->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="issue_date">Data da compra</label>
                            <input type="date" class="form-control" name="issue_date" id="issue_date" value="{{ $item->issue_date }}">
                        </div>
                        <div class="form-group">
                            <label for="amount">Valor</label>
                            <input type="number" class="form-control" name="amount" id="amount" value="{{ $item->amount }}">
                        </div>
                        <div class="form-group">
                            <label for="additional_info">Informação</label>
                            <input type="text" class="form-control" name="additional_info" id="additional_info" value="{{ $item->additional_info }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Concluir</button>
                    </form>
            </section>
        </div>
    </div>
@endsection