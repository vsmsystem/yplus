@extends('layouts.main')

@section('title', 'Dashboard')
@section('content')

    <div class="row state-overview">
        <div class="col-lg-4">
            <section class="panel">
                <div class="profile-widget profile-widget-img">
                    <div class="panel-body" style="margin:0px;padding:0px;">
                        <video id="camscanner" style="width:100%;"></video>                        
                        
                    </div>
                    <footer class="profile-widget-foot">
                        <div class="follow-task">
                            <span>
                                <a id="startcamera1" href="#">
                                    <i class="fa fa-camera tooltips" data-original-title="My Mail"></i>
                                    {{-- <span class="badge bg-important">1</span> --}}
                                </a>
                            </span>
                            <span>
                                <a id="startcamera2" href="#">
                                    <i class="fa fa-camera tooltips" data-original-title="My Profit"></i>
                                    {{-- <span class="badge bg-important">2</span> --}}
                                </a>
                            </span>
               

                        </div>
                    </footer>
                </div>
            </section>

            <script src="{{asset('js/instascan.min.js')}}"></script> {{-- /home/valdecir/workspace/yplus/yplus/resources/js/instascan.min.js --}}
            <script>
                const  scanner = new Instascan.Scanner({
                    video:document.querySelector("#camscanner")
                })

                scanner.addListener('scan', content =>{
                    document.querySelector("#url").value=content
                    // document.querySelector("#lista").insertAdjacentHTML("afterbegin",`<div class="codelink">${content}</div>`)
                    // console.log(content)
                })


                Instascan.Camera.getCameras().then(cameras =>{
                    console.warn(cameras)
                    //scanner.start(cameras[0]);            
                    if(cameras.length > 1 ){
                        // scanner.start(cameras[1])
                    }
                    else{
                        // scanner.start(cameras[0])
                    }
            
                    window.showCameras = function(){
                        console.warn(cameras)
                        //
                    }

                    window.selectCamera = function(cameraIndex){
                        scanner.start(cameras[cameraIndex])
                        //
                    }
                })
                
                document.querySelector("#startcamera1").addEventListener("click", event =>{
                    selectCamera(0)
                })

                document.querySelector("#startcamera2").addEventListener("click", event =>{
                    selectCamera(1)
                })
            </script>

            <div id="lista"></div>
        </div>



        <style>
            body.dark .form-control {
                background-color: #181717;

            }
        </style>


        <div class="state col-lg-8">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <label for="">Descrição</label>
                    <input id="description" class="form-control" type="text">

                    <label for="">Valor Total</label>
                    <input id="amount" class="form-control" type="number">
                    
                    <label for="">URL</label>
                    <input id="url" class="form-control" type="text">

                    <label for="">Data</label>
                    <input id="date" class="form-control" type="datetime-local" value="{{date("Y-m-d H:i")}}">

                    <br>
                    <button id="salvarDespesa" class="btn btn-primary btn-block">Salvar</button>
                    <script>
                        document.querySelector("#salvarDespesa").addEventListener("click", e =>{
                            alert("Aqui vai a requisiçãop que consome a API e salva no banco")
                        })
                    </script>

                </div>
                <div class="col-lg-3 col-sm-6">
                    <label for="">Estabelecimento</label>
                    <input id="organization" class="form-control" type="text">

                </div>
                <div class="col-lg-3 col-sm-6">
                    Conta
                    <select class="form-control" name="" id="">
                        <option>Selecione</option>
                        <option>CC</option>
                        <option>Crédito</option>
                        <option>Refeição</option>
                        <option>Alimentação</option>
                    </select>
                </div>
                <div class="col-lg-3 col-sm-6">
                    Categoria
                    <select class="form-control" name="" id="">
                        <option>Selecione</option>
                        <option>Gol</option>
                        <option>Onibus</option>
                        <option>Obra</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <div class="panel-body progress-panel">
                    <div class="row">
                        <div class="col-lg-8 task-progress pull-left">
                            <h1>Ultimas Despesas</h1>
                        </div>
                        <div class="col-lg-4">
                            <span class="profile-ava pull-right">
                                <img alt="" class="simple" src="{{ session('avatar') ?? asset('img/avatar-mini.jpg') }}">
                                {{Auth::user()->name}}
                            </span>
                        </div>
                    </div>
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                        <tr>
                            <th>Estabelecimento</th>
                            <th>Data</th>
                            <th>Valor Total</th>
                            <th>Descrição</th>
                            <th></th>
                        </tr>
                        @foreach ($itens as $item)
                            <tr class="">
                                
                                <td>
                                    @if($item->status_revision == 1)
                                        <i class="fa fa-check"></i>
                                    @else
                                        <i class="fa fa-clock-o" style="color:orange"></i>
                                    @endif
                                    {{$item->organization_name}}
                                </td>
                                <td>{{$item->issue_date}}</td>
                                <td>{{$item->amount / 100}}</td>
                                <td>{{$item->additional_info}}</td>
                                <td>
                                    @if ($item->url)
                                    {{-- enquanto não travar pelo id do usuario, nao fornecer a url no href --}}
                                    {{-- href='{{$item->url}}' --}}
                                    <a href='#' target='_blank'> <i class="fa fa-link"></i> </a>
                                    @endif
                                    &nbsp;
                                    <i class="fa fa-trash"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>








@endsection
