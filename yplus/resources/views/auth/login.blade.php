<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="{{asset('/faviconimg/site.webmanifest')}}">
  <link rel="mask-icon" href="{{asset('img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  
  <title>Yplus</title>
  <style>
    body {
      margin: 0 auto;
      padding: 0 auto;
      height: 100vh;
      background: linear-gradient(45deg, #777, #000);
      background-size: cover;
      font-family: sans-serif;
    }

    .loginBox {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 350px;
      height: 560px;
      padding: 40px;
      border-radius: 10px;
      box-sizing: border-box;
      background: rgba(255, 255, 255, 0.151);
      background-position: center;
    }

    .user {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      overflow: hidden;
      position: absolute;
      top: calc(-100px/2);
      left: calc(70% - 35%);
    }

    h2 {
      margin: 0;
      padding: 30px 0 40px;
      color: #ffffff;
      text-align: center;
    }

    .loginBox p {
      margin: 0;
      padding: 0;
      font-weight: bold;
      color: #dbdbdb;
    }

    .loginBox input {
      width: 100%;
      margin-bottom: 20px;
    }

    .loginBox input[type="text"],
    .loginBox input[type="password"] {
      border: none;
      border-bottom: 1px solid #fff;
      background: transparent;
      outline: none;
      height: 40px;
      color: #fff;
      font-size: 16px;
    }

    ::placeholder {
      color: rgba(255, 255, 255, .5);
    }

    .loginBox input[type="submit"] {
      border: none;
      outline: none;
      height: 40px;
      color: #fff;
      font-size: 14px;
      background: linear-gradient(45deg, #000, #111);
      cursor: pointer;
      border-radius: 20px;
    }

    .loginBox input[type="submit"]:hover {
      background: linear-gradient(45deg, #222, #333);
    }

    .loginBox .a {
      color: #fff;
      font-size: 14px;
      font-weight: bold;
      text-decoration: none;
    }

    .loginBox h5 {
      margin: 0;
      padding: 15px 0 0 0;
      text-align: center;
      color: #fff;
    }

    .loginBox h4 {
      margin: 0;
      padding: 30px;
      text-align: center;
      color: #fff;
    }

    .loginBox h4 a {
      text-decoration: none;
      color: #BE5869;
    }

    ul {
      margin: 0;
      padding: 0;
      display: flex;
    }

    ul li {
      list-style: none;
      float: left;
      top: 10px;
      left: 65px;
      margin: 10px;
      width: 50px;
      height: 50px;
      line-height: 50px;
      text-align: center;
      background: #fff;
      font-size: 40px;
      border-radius: 20%;
      position: relative;
      transition: .5s ease-in-out;
      z-index: 1;
    }

    ul li a {
      font-size: 35px;
    }

    ul li .facebook {
      color: #3b5999;
    }

    ul li .google {
      color: #dd4b39;
    }

    ul li a:before {
      content: '';
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      border-radius: 20%;
      transform: scale(0);
      transition: .5s ease-in-out;
      z-index: -1;
    }

    ul li a:before {
      background: linear-gradient(45deg, #FC354C, #0ABFBC);
    }

    ul li a:hover:before {
      transform: scale(.9);
    }

    ul li a:hover {
      color: #fff;
    }

    .txt2:hover {
      color: black;
    }

    @media screen and (max-width: 988px) {
      .loginBox {
        width: 350px;
        height: 560px;
      }
    }

    @media screen and (max-width: 640px) {
      .loginBox {
        width: 350px;
        height: 560px;
        right: 10px;
      }
    }

    @media screen and (max-width: 320px) {
      .loginBox {
        right: 10px;
        width: 320px;
        height: 560px;
      }

    }

    .alert-warning {
      font-size: 17px;
      text-decoration: none;
      list-style: none;
      border-radius: 5px;
      padding: 10px;
      background-color: #ffe497;
      font-weight: bold;
      color: #9f7702;
      margin-bottom: 10px;
    }
  </style>
  <link href="http://infiniteiotdevices.com/images/logo.png" rel="icon" sizes="16x16" type="image/gif" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
  <div class="loginBox">
    <img style="display: none;" src="https://www.vsmsystem.com/img/vsmsystem-v3-small.png" class="user">
    <h2>Yplus</h2>
    <div>
      @include('layouts.partials.messages')
    </div>
    <form method="post" action="{{ route('login.perform') }}">
      <p>Usuário</p>
      @csrf
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <input type="text" name="username" value="{{ old('email') }}" placeholder="Email" required="required" autofocus>
      <div>
        @if ($errors->has('name'))
        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
        @endif
      </div>
      <p>Senha</p>
      <input type="password" name="password" value="{{ old('password') }}" required="required" placeholder="••••••••">
      <div>
        @if ($errors->has('password'))
        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
        @endif
      </div>
      <input type="submit" name="" value="LOGIN">
      <a href="#" class="a">Esqueceu sua senha?</a>
      <h5></h5>
      <ul>
        <li><a href="{{ route('social.login',['provider'=>'facebook']) }}" class="facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="{{ route('social.login',['provider'=>'google']) }}" class="google"><i class="fa fa-google"></i></a></li>
      </ul>
      <h4>Create account? <a class="txt2" href="#">Sign Up</a></h4>
    </form>
  </div>
</body>

</html>