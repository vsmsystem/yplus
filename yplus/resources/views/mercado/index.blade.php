@extends('layouts.main')
@section('title','Lista de Mercado')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading" style="font-weight: 900; font-size:18px">
                Comprar
            </header>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Marca</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($itens as $item)
                        <tr class="">
                            <td>{{$item->nome}}</td>
                            <td>{{$item->quantidade}}</td>
                            <td>{{$item->marca}}</td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </section>
    </div>
</div>

@endsection