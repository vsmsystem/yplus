@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
  @auth
  <h1>Dashboard</h1>
  <img width="50px" src="{{ $avatarUrl }}" alt="Avatar">
  <p class="lead">

    @if (auth()->check())
  <p>JWT Sessão</p>
  <p>{{ session('tokenJWT') }}</p>
  <p>Usuário:</p>
  <p>{{ auth()->user() }}!</p>
  @endif

  Only authenticated users can access this section.</p>
  <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
  @endauth

  @guest
  <h1>Homepage</h1>
  <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
  @endguest
</div>
@endsection