@extends('layouts.app-master')

@section('content')
<div class="p-5 m-50 rounded bgglass1" style="margin-top:20px">
  @auth
  <h1>Dashboard</h1>

  <p class="lead">

    @if (auth()->check())
  <p>JWT Sessão</p>
  <p id="jwtt">{{ session('tokenJWT') }}</p>
  <script>
    var jwtt = document.querySelector("#jwtt");
    if (jwtt.value) {
      localStorage["jwtt"] == jwtt.value
    } else {
      jwtt.value = localStorage["jwtt"]
    }
  </script>
  <p>Usuário:</p>
  <p>{{ auth()->user() }}!</p>
  @endif

  Only authenticated users can access this section.</p>
  <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
  @endauth

  @guest
  <h1 style="color:#ddd"></h1>
  <p class="lead" style="color:#ddd;">Olá! Ainda não tem nada de tão interessante por aqui, esté é um projetinho que temos executado nas horas vagas para praticar alguns conceitos de desenvolvimento de software, e a principio está substintuindo nossas planilhas de gerenciamento financeiro.</p>
  <p class="lead" style="color:#ddd;">(0.0.19)</p>

  
  @endguest
</div>



@endsection