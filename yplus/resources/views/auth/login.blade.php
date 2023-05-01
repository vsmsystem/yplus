@extends('layouts.auth-master')

@section('content')
<form method="post" action="{{ route('login.perform') }}">

  @csrf
  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">

  <h1 class="h3 mb-3 fw-normal">Login</h1>

  @include('layouts.partials.messages')

  <div class="form-group form-floating mb-3">
    <input type="text" class="form-control" name="username" value="{{ old('email') }}" placeholder="Email" required="required" autofocus>
    <label for="floatingName">Email or Username</label>
    @if ($errors->has('name'))
    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
    @endif
  </div>

  <div class="form-group form-floating mb-3">
    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
    <label for="floatingPassword">Password</label>
    @if ($errors->has('password'))
    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
    @endif
  </div>

  <button class="mb-1 w-100 btn btn-lg btn-primary" type="submit">Login</button><br>
  <a class="mb-1 w-100 btn btn-lg btn-primary" href="{{ route('social.login',['provider'=>'google']) }}">Google+</a><br>
  <a class="mb-1 w-100 btn btn-lg btn-primary" href="{{ route('social.login',['provider'=>'facebook']) }}">Facebook</a><br>

  @include('auth.partials.copy')
</form>
@endsection