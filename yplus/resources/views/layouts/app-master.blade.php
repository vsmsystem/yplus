<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.87.0">

  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="{{asset('/faviconimg/site.webmanifest')}}">
  <link rel="mask-icon" href="{{asset('img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#000000">
  <title>Yplus</title>

  <!-- Bootstrap core CSS -->
  <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

  <style>

    /* From https://css.glass */
    .bgglass1{

      background: rgba(255, 255, 255, 0.2);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(3px);
      -webkit-backdrop-filter: blur(3px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .bgglass2{
      /* From https://css.glass */
      background: rgba(73, 1, 69, 0.46);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(3.9px);
      -webkit-backdrop-filter: blur(3.9px);
      border: 1px solid rgba(73, 1, 69, 0.39);
    }



    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

    *{
        margin: 0px;
        padding: 0px;
    }

    body{
        font-family: 'Exo', sans-serif;
    }


    .context {
        width: 100%;
        position: absolute;
        top:50vh;
        
    }

    .context h1{
        text-align: center;
        color: #fff;
        font-size: 50px;
    }


    .area{


      background: rgb(137,235,255);
      background: linear-gradient(164deg, rgb(0 73 88) 0%, rgba(158,0,185,1) 100%);

        width: 100%;
        height:100vh;
        
      
    }

    .circles{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .circles li{
        position: absolute;
        display: block;
        list-style: none;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.2);
        animation: animate 25s linear infinite;
        bottom: -150px;
        
    }

    .circles li:nth-child(1){
        left: 25%;
        width: 80px;
        height: 80px;
        animation-delay: 0s;
    }


    .circles li:nth-child(2){
        left: 10%;
        width: 20px;
        height: 20px;
        animation-delay: 2s;
        animation-duration: 12s;
    }

    .circles li:nth-child(3){
        left: 70%;
        width: 20px;
        height: 20px;
        animation-delay: 4s;
    }

    .circles li:nth-child(4){
        left: 40%;
        width: 60px;
        height: 60px;
        animation-delay: 0s;
        animation-duration: 18s;
    }

    .circles li:nth-child(5){
        left: 65%;
        width: 20px;
        height: 20px;
        animation-delay: 0s;
    }

    .circles li:nth-child(6){
        left: 75%;
        width: 110px;
        height: 110px;
        animation-delay: 3s;
    }

    .circles li:nth-child(7){
        left: 35%;
        width: 150px;
        height: 150px;
        animation-delay: 7s;
    }

    .circles li:nth-child(8){
        left: 50%;
        width: 25px;
        height: 25px;
        animation-delay: 15s;
        animation-duration: 45s;
    }

    .circles li:nth-child(9){
        left: 20%;
        width: 15px;
        height: 15px;
        animation-delay: 2s;
        animation-duration: 35s;
    }

    .circles li:nth-child(10){
        left: 85%;
        width: 150px;
        height: 150px;
        animation-delay: 0s;
        animation-duration: 11s;
    }



    @keyframes animate {

        0%{
            transform: translateY(0) rotate(0deg);
            opacity: 1;
            border-radius: 0;
        }

        100%{
            transform: translateY(-1000px) rotate(720deg);
            opacity: 0;
            border-radius: 50%;
        }

    }
  </style>
</head>

<body>

  @include('layouts.partials.navbar')

  <div class="area" style="position:fixed;z-index:-1;top:0;left:0;">
    <ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
</div >
  <main class="container">
    @yield('content')
  </main>

  <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>