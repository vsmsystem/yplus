@extends('layouts.main')
@section('title','Lista de Mercado')
@section('content')

<div class="row">
    @if(session('success'))
    <div class="col-sm-12"> 
        <div class="panel panel-info" data-collapsed="0">
            <div class="panel-heading">
                <div>Pronto!</div> 
                <p>{{ session('success') }}</p>
            </div>
        </div>
    </div>
    @endif

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
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($itens as $item)
                        <div class="item">
                            <!-- Exibir itens -->
                            <tr class="">
                                <td>{{$item->nome}}</td>
                                <td>{{$item->quantidade}}</td>
                                <td>{{$item->marca}}</td>
                                <td>
                                    <form method="post" style="display:inline" action="{{ route('mercado.delete', ['id' => $item->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                    <form method="post" style="display:inline" action="{{ route('mercado.edit', ['id' => $item->id]) }}">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                                    </form>
                                </td>
                            </tr>

                        </div>
                    @endforeach


                </tbody>
            </table>
            <a class="btn btn-primary" href="{{route('mercado.create')}}" >Adicionar</a>
            
        </section>
    </div>
</div>

@endsection