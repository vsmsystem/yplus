@extends('layouts.main')
@section('title','Lista de Registros financeiros')
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
                Registros de transações
            </header>
            <a class="btn btn-primary" href="{{route('financas.create')}}" >Adicionar</a>
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Data da compra</th>
                        <th>Valor</th>
                        <th>Informação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($itens as $item)
                        <div class="item">
                            <!-- Exibir itens -->
                            <tr class="">
                                <td>{{$item->issue_date}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->additional_info}}</td>
                                <td>
                                    <form method="post" style="display:inline" action="{{ route('financas.delete', ['id' => $item->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                    <form method="post" style="display:inline" action="{{ route('financas.edit', ['id' => $item->id]) }}">
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
            
            
        </section>
    </div>
</div>

@endsection