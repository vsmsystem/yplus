@extends('layouts.main')

@section('title', 'Dashboard')
@section('content')

    <!--overview start-->
    <div class="row state-overview">
        <div class="col-lg-4">
            <!--user profile info start-->
            <section class="panel">
                <div class="profile-widget profile-widget-img">
                    <div class="panel-body">
                        <div class="col-lg-4 col-sm-4 profile-widget-name">
                            <h4>{{ session('name') }}</h4>
                            <div class="follow-ava">
                                <img src="{{ session('avatar') ?? asset('img/profile-avatar.jpg') }}" alt="">
                            </div>
                            <h6>Administrador</h6>
                        </div>
                        <div class="col-lg-8 col-sm-8 follow-info">
                            <p>Olá {{ session('name') }}, você tem assuntos pendentes, confira.</p>
                            <p>@vsmsystem</p>
                            <h6>
                                <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                <span><i class="icon_calendar"></i>25.10.13</span>
                                <span><i class="icon_pin_alt"></i>NY</span>
                            </h6>
                        </div>
                        <div class="weather-category twt-category">
                            <ul>
                                <li class="active">
                                    <h4>50</h4>
                                    <i class="icon_close_alt2"></i> Pending Task
                                </li>
                                <li>
                                    <h4>550</h4>
                                    <i class="icon_check_alt2"></i> Completed
                                </li>
                                <li>
                                    <h4>600</h4>
                                    <i class="icon_plus_alt2"></i> Total Task
                                </li>
                            </ul>
                        </div>
                    </div>
                    <footer class="profile-widget-foot">
                        <div class="follow-task">
                            <span>
                                <a href="">
                                    <i class="icon_mail_alt tooltips" data-original-title="My Mail"></i>
                                    <span class="badge bg-important">4</span>
                                </a>
                            </span>
                            <span>
                                <a href="">
                                    <i class="icon_percent tooltips" data-original-title="My Profit"></i>
                                </a>
                            </span>
                            <span>
                                <a href="">
                                    <i class="icon_heart_alt tooltips" data-original-title="Favorits"></i>
                                    <span class="badge bg-important">2</span>
                                </a>
                            </span>
                            <span>
                                <a href="">
                                    <i class="icon_cart_alt tooltips" data-original-title="Sell"></i>
                                </a>
                            </span>
                            <span>
                                <a href="">
                                    <i class="icon_lightbulb_alt tooltips" data-original-title="Suggesation"></i>
                                    <span class="badge bg-important">6</span>
                                </a>
                            </span>
                            <span>
                                <a href="">
                                    <i class="icon_piechart tooltips" data-original-title="Reports"></i>
                                </a>
                            </span>

                        </div>
                    </footer>
                </div>
            </section>
            <!--user profile info end-->
        </div>
        <!-- statics start -->
        <div class="state col-lg-8">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <section class="custom-panel">
                        <button type="button" class="btn btn-info btn-xs btn-block largebtn"> + Compra
                            Mercado</button>
                        <button type="button" class="btn btn-info btn-xs btn-block largebtn">+ Compra Geral</button>
                        <button type="button" class="btn btn-info btn-xs btn-block largebtn">+ Outras
                            Despesas</button>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol">
                            <i class="icon-usd"></i>
                        </div>
                        <div class="value">
                            <h1>223,20</h1>
                            <p>V.Gasto</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol">
                            <i class="icon-credit-card"></i>
                        </div>
                        <div class="value">
                            <h1>345,75</h1>
                            <p>Fatura 02/16</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <section class="panel">
                        <div class="symbol">
                            <i class="icon_currency"></i>
                        </div>
                        <div class="value">
                            <h1>437,35</h1>
                            <p>Disponível</p>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row knob-charts">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-body">
                            <ul class="summary-list">
                                <li>
                                    <a href="javascript:;">
                                        <input class="knob" data-readonly="true" data-width="80" data-height="80"
                                            data-displayPrevious=true data-thickness=".1" value="75"
                                            data-fgColor="#007AFF" data-bgColor="#F7F7F7">
                                        <p>
                                            <select>
                                                <option> Água </option>
                                                <option>+200 ml</option>
                                                <option>+300 ml</option>
                                                <option>+400 ml</option>
                                            </select>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <input class="knob" data-readonly="true" data-width="80" data-height="80"
                                            data-displayPrevious=true data-thickness=".1" value="25"
                                            data-fgColor="#34AADC" data-bgColor="#F7F7F7">
                                        <p>
                                            <select>
                                                <option> Café </option>
                                                <option>+200 ml</option>
                                                <option>+300 ml</option>
                                                <option>+400 ml</option>
                                            </select>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <input class="knob" data-readonly="true" data-width="80" data-height="80"
                                            data-displayPrevious=true data-thickness=".1" value="85"
                                            data-fgColor="#FF2D55" data-bgColor="#F7F7F7">
                                        <p>
                                            <select>
                                                <option> Refeição </option>
                                                <option>Arroz+feijão1</option>
                                                <option>Arroz+feijão2</option>
                                                <option>Macarrão1</option>
                                                <option>Macarrão2</option>
                                            </select>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <input class="knob" data-readonly="true" data-width="80" data-height="80"
                                            data-displayPrevious=true data-thickness=".1" value="95"
                                            data-fgColor="#34AADC" data-bgColor="#F7F7F7">
                                        <p>
                                            <select>
                                                <option> Exercicio </option>
                                                <option>Aerobico</option>
                                                <option>Peito</option>
                                                <option>Braços</option>
                                                <option>Costas</option>
                                                <option>Pernas</option>
                                            </select>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <input class="knob" data-readonly="true" data-width="80" data-height="80"
                                            data-displayPrevious=true data-thickness=".1" value="65"
                                            data-fgColor="#007AFF" data-bgColor="#F7F7F7">
                                        <p>
                                            <select>
                                                <option> Sono </option>
                                                <option>12h</option>
                                                <option>10h</option>
                                                <option>8h</option>
                                                <option>6h</option>
                                                <option>4h</option>
                                                <option>2h</option>
                                                <option>0h</option>
                                            </select>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- statics end -->
    </div>
    <!--overview end-->
    <section>
        <div class="row">
            <div class="col-sm-3">
                <section class="panel">
                    <header class="panel-heading">
                        Contas a Pagar
                    </header>
                    <table class="table table-condensed">

                        <tbody>
                            <tr class="danger">
                                <td>GVT / internet</td>
                                <td> Hoje <span class="pull-right label label-danger">Crítico</span></td>
                            </tr>
                            <tr class="warning">
                                <td>Copel / Luz</td>
                                <td> Amanhã <span class="pull-right label label-warning">Atenção</span></td>
                            </tr>
                            <tr>
                                <td>Condomínio</td>
                                <td>+2 dias </td>
                            </tr>
                            <tr class="success">
                                <td>UOL-Host</td>
                                <td>+6 dias <span class="pull-right label label-success">Automático</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Aluguel</td>
                                <td>+9 dias </td>
                            </tr>



                        </tbody>
                    </table>
                </section>
            </div>
            <div class="col-sm-3">
                <section class="panel">
                    <header class="panel-heading">
                        Contas a Receber
                    </header>
                    <table class="table table-condensed">

                        <tbody>
                            <tr class="warning">
                                <td>Fabiano [222b]</td>
                                <td>Hoje<span class="pull-right label label-warning">Atenção</span></td>
                            </tr>
                            <tr class="">
                                <td>Patrícia [161]</td>
                                <td>Amanhã</td>
                            </tr>
                            <tr class="">
                                <td>Marisa [192]</td>
                                <td>+3 dias</td>
                            </tr>

                        </tbody>
                    </table>
                </section>
            </div>
            <div class="col-sm-3">
                <section class="panel">
                    <header class="panel-heading">
                        Contas a Tarefas pendentes
                    </header>
                    <table class="table table-condensed">

                        <tbody>
                            <tr class="">
                                <td>Fazer arroz</td>
                                <td>Hoje</td>
                            </tr>
                            <tr class="">
                                <td>Fazer Feijão</td>
                                <td>Hoje</td>
                            </tr>
                            <tr class="">
                                <td>Trocar os lixos</td>
                                <td>Amanhã</td>
                            </tr>


                        </tbody>
                    </table>
                </section>
            </div>
            <div class="col-sm-3">
                <section class="panel">
                    <header class="panel-heading">
                        Agendamentos
                    </header>
                    <table class="table table-condensed">

                        <tbody>
                            <tr class="">
                                <td>Desntista</td>
                                <td>22/02</td>
                            </tr>


                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </section>


    <div class="row">




        <div class="col-lg-4">
            <!--project team start-->
            <section class="panel">
                <div class="panel-body project-team">
                    <div class="task-progress">
                        <h1>Project Team</h1>
                    </div>
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                        <tr>
                            <td>
                                <span class="profile-ava">
                                    <img alt="" class="simple" src="img/avatar1_small.jpg">
                                </span>
                            </td>
                            <td>
                                <p class="profile-name">John Doe</p>
                                <p class="profile-occupation">UX Designer</p>
                            </td>
                            <td>
                                <span class="badge bg-important">75%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="profile-ava">
                                    <img alt="" class="simple" src="img/avatar-mini.jpg">
                                </span>
                            </td>
                            <td>
                                <p class="profile-name">Rena Rios</p>
                                <p class="profile-occupation">UX Designer</p>
                            </td>
                            <td>
                                <span class="badge bg-success">43%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="profile-ava">
                                    <img alt="" class="simple" src="img/avatar-mini2.jpg">
                                </span>
                            </td>
                            <td>
                                <p class="profile-name">Robin Mathis</p>
                                <p class="profile-occupation">UX Designer</p>
                            </td>
                            <td>
                                <span class="badge bg-info">67%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="profile-ava">
                                    <img alt="" class="simple" src="img/avatar-mini3.jpg">
                                </span>
                            </td>
                            <td>
                                <p class="profile-name">Bennie Gilliam</p>
                                <p class="profile-occupation">UX Designer</p>
                            </td>
                            <td>
                                <span class="badge bg-warning">30%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="profile-ava">
                                    <img alt="" class="simple" src="img/avatar-mini4.jpg">
                                </span>
                            </td>
                            <td>
                                <p class="profile-name">Eddy Wilcox</p>
                                <p class="profile-occupation">UX Designer</p>
                            </td>
                            <td>
                                <span class="badge bg-primary">15%</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <!--Project Team end-->
        </div>


        <div class="col-lg-8">
            <!--Project Activity start-->
            <section class="panel">
                <div class="panel-body progress-panel">
                    <div class="row">
                        <div class="col-lg-8 task-progress pull-left">
                            <h1>Project Activity</h1>
                        </div>
                        <div class="col-lg-4">
                            <span class="profile-ava pull-right">
                                <img alt="" class="simple" src="img/avatar1_small.jpg">
                                John Doe
                            </span>
                        </div>
                    </div>
                </div>
                <table class="table table-hover personal-task">
                    <tbody>
                        <tr>
                            <td>Today</td>
                            <td>
                                Project SRS.
                            </td>
                            <td>
                                <span class="badge bg-important">Upload</span>
                            </td>
                            <td>
                                <span class="profile-ava">
                                    <img alt="" class="simple" src="img/avatar1_small.jpg">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>Yesterday</td>
                            <td>
                                Project Design Task
                            </td>
                            <td>
                                <span class="badge bg-success">Task</span>
                            </td>
                            <td>
                                <div id="work-progress2"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>21.10.13</td>
                            <td>
                                Generate Invoice
                            </td>
                            <td>
                                <span class="badge bg-success">Task</span>
                            </td>
                            <td>
                                <div id="work-progress3"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>22.10.13</td>
                            <td>
                                Project Testing
                            </td>
                            <td>
                                <span class="badge bg-primary">To-Do</span>
                            </td>
                            <td>
                                <span class="profile-ava">
                                    <img alt="" class="simple" src="img/avatar1_small.jpg">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>24.10.13</td>
                            <td>
                                Project Release Date
                            </td>
                            <td>
                                <span class="badge bg-info">Milestone</span>
                            </td>
                            <td>
                                <div id="work-progress4"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>28.10.13</td>
                            <td>
                                Project Release Date
                            </td>
                            <td>
                                <span class="badge bg-primary">To-Do</span>
                            </td>
                            <td>
                                <div id="work-progress5"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <!--Project Activity end-->
        </div>
    </div>

    <!-- project team & activity end -->


    <!-- dashboard charts start -->
    <div class="row">
        <div class="col-lg-8">
            <div class="panel">
                <div class="border-head">
                    <div class="row">
                        <div class="col-lg-8 pull-left">
                            <h3><i class="icon_currency"></i> 2013 - Earning Graph</h3>
                        </div>
                        <div class="col-lg-4 pull-right">
                            <div class="btn-row">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary active">
                                        <input type="checkbox"> Month
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="checkbox"> Week
                                    </label>
                                    <label class="btn btn-primary">
                                        <input type="checkbox"> Day
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <!--custom chart start-->
                    <div class="custom-custom-bar-chart">
                        <div class="bar">
                            <div class="title">JAN</div>
                            <div class="value tooltips" data-original-title="85%" data-toggle="tooltip"
                                data-placement="top">85%</div>
                        </div>
                        <div class="bar doted">
                            <div class="title">FEB</div>
                            <div class="value tooltips" data-original-title="36%" data-toggle="tooltip"
                                data-placement="top">36%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">MAR</div>
                            <div class="value tooltips" data-original-title="50%" data-toggle="tooltip"
                                data-placement="top">50%</div>
                        </div>
                        <div class="bar doted">
                            <div class="title">APR</div>
                            <div class="value tooltips" data-original-title="65%" data-toggle="tooltip"
                                data-placement="top">65%</div>
                        </div>
                        <div class="bar">
                            <div class="title">MAY</div>
                            <div class="value tooltips" data-original-title="30%" data-toggle="tooltip"
                                data-placement="top">30%</div>
                        </div>
                        <div class="bar doted">
                            <div class="title">JUN</div>
                            <div class="value tooltips" data-original-title="95%" data-toggle="tooltip"
                                data-placement="top">95%</div>
                        </div>
                        <div class="bar">
                            <div class="title">JUL</div>
                            <div class="value tooltips" data-original-title="45%" data-toggle="tooltip"
                                data-placement="top">45%</div>
                        </div>
                        <div class="bar doted">
                            <div class="title">AUG</div>
                            <div class="value tooltips" data-original-title="85%" data-toggle="tooltip"
                                data-placement="top">85%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">SEP</div>
                            <div class="value tooltips" data-original-title="70%" data-toggle="tooltip"
                                data-placement="top">70%</div>
                        </div>
                        <div class="bar doted">
                            <div class="title">OCT</div>
                            <div class="value tooltips" data-original-title="55%" data-toggle="tooltip"
                                data-placement="top">55%</div>
                        </div>
                        <div class="bar ">
                            <div class="title">NOV</div>
                            <div class="value tooltips" data-original-title="35%" data-toggle="tooltip"
                                data-placement="top">35%</div>
                        </div>
                        <div class="bar doted">
                            <div class="title">DEC</div>
                            <div class="value tooltips" data-original-title="95%" data-toggle="tooltip"
                                data-placement="top">95%</div>
                        </div>
                    </div>
                    <!--custom chart end-->
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <!--new earning start-->
            <div class="panel terques-chart">
                <div class="panel-body chart-texture">
                    <div class="chart">
                        <div class="heading">
                            <span>Today</span>
                            <strong>$ 88,00</strong>
                        </div>
                        <div class="sparkline" data-type="line" data-resize="true" data-height="120" data-width="90%"
                            data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color=""
                            data-highlight-line-color="#fff" data-spot-radius="4"
                            data-data="[150,200,637,233,536,936,464,153,891,568,955,999]"></div>
                    </div>
                    <div class="chart-tittle">
                        <span class="title">Month Earning</span>
                        <span class="value">
                            <a href="#" class="active">Online</a>
                            |
                            <a href="#">Advertising</a>
                            |
                            <a href="#">Market</a>
                        </span>
                    </div>
                </div>

            </div>
            <!--new earning end-->

            <!--total earning start-->
            <div class="panel green-chart">
                <div class="panel-body">
                    <div class="chart">
                        <div class="heading">
                            <span>Year 2013</span>
                        </div>
                        <div id="barchart"></div>
                    </div>
                </div>
                <div class="chart-tittle">
                    <span class="title">Yearly Earning</span>
                    <span class="value">$ 90,15,987</span>
                </div>
            </div>
            <!--total earning end-->
        </div>
    </div>
    <!-- dashboard charts end -->

    <!-- timeline & chat start -->
    <div class="row">
        <div class="col-lg-6">
            <!--timeline start-->
            <section class="panel">
                <div class="panel-body">
                    <div class="text-center">
                        <h3 class="timeline-title">Timeline</h3>
                        <div class="timeline-ava">
                            <img src="img/profile-widget-avatar.jpg" alt="">
                        </div>
                    </div>

                    <div class="timeline">
                        <article class="timeline-item">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon"></span>
                                        <span class="timeline-date">07:15 pm</span>
                                        <h1 class="">18 June | Monday</h1>
                                        <p>Keep conversations going.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item alt">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow-alt"></span>
                                        <span class="timeline-date">07:00 AM</span>
                                        <h1 class="">12 July | Sunday</h1>
                                        <p><a href="#">Robert Yates</a> added new file <span><a href="#"
                                                    class="green">abc.img</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon"></span>
                                        <span class="timeline-date">12:32 AM</span>
                                        <h1 class="">02 Jan | Monday</h1>
                                        <p><a href="#">Jesse Pena</a> added new album <span><a href="#"
                                                    class="blue">PICNIC</a></span></p>
                                        <div class="album">
                                            <a href="#">
                                                <img alt="" src="img/sample-img-1.jpg">
                                            </a>
                                            <a href="#">
                                                <img alt="" src="img/sample-img-2.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item alt">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow-alt"></span>
                                        <span class="timeline-icon"></span>
                                        <span class="timeline-date">5:20 PM</span>
                                        <h1 class="">29 Fab | Saturday</h1>
                                        <p>Create and manage team intranets with wiki pages.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="timeline-item">
                            <div class="timeline-desk">
                                <div class="panel">
                                    <div class="panel-body">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon"></span>
                                        <span class="timeline-date">08:15 PM</span>
                                        <h1 class="">24 April | Tuesday</h1>
                                        <p><a href="#">Jonatha Smith</a> added new milestone <span><a href="#"
                                                    class="light-green">UI Demo</a></span></p>
                                        <p>Morbi in sem quis dui placerat ornare.</p>
                                        <a href="#">
                                            <img alt="" src="img/sample-img-1.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt="" src="img/sample-img-2.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="clearfix">&nbsp;</div>
                </div>
            </section>
            <!--timeline end-->
        </div>
        <div class="col-lg-6">
            <!--chat start-->
            <section class="panel">
                <header class="panel-heading">
                    <h3>Chat</h3>
                </header>
                <div class="panel-body profile-activity">
                    <h5 class="pull-right">12 August 2013</h5>
                    <div class="activity">
                        <span class="profile-ava">
                            <img alt="" class="simple" src="img/avatar-mini.jpg">
                        </span>
                        <div class="activity-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="arrow"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <h6>12:29 AM</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="activity alt">
                        <span class="profile-ava">
                            <img alt="" class="simple" src="img/avatar1_small.jpg">
                        </span>
                        <div class="activity-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="arrow-alt"></div>
                                    <p>Lorem ipsum dolor sit amet consiquest dio</p>
                                    <h6>12:30 AM</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="activity">
                        <span class="profile-ava">
                            <img alt="" class="simple" src="img/avatar-mini.jpg">
                        </span>
                        <div class="activity-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="arrow"></div>
                                    <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi,
                                        euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras
                                        consequat.</p>
                                    <h6>12:30 AM</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="activity alt">
                        <span class="profile-ava">
                            <img alt="" class="simple" src="img/avatar1_small.jpg">
                        </span>
                        <div class="activity-desk">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="arrow-alt"></div>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                        fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                        ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                                        egestas semper. Aenean ultricies mi vitae est. Mauris placerat
                                        eleifend leo.</p>
                                    <h6>12:30 AM</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chat-form">
                        <div class="input-cont ">
                            <input type="text" class="form-control col-lg-12" placeholder="Type a message here...">
                        </div>
                        <div class="form-group">
                            <div class="pull-right chat-features">
                                <a href="javascript:;">
                                    <i class="icon_pin_alt"></i>
                                </a>
                                <a href="javascript:;">
                                    <i class="icon_mic_alt"></i>
                                </a>
                                <a href="javascript:;">
                                    <i class="icon_paperclip"></i>
                                </a>
                                <a href="javascript:;">
                                    <i class="icon_image"></i>
                                </a>
                                <a class="btn btn-primary" href="javascript:;">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--chat end-->
        </div>
    </div>
    <!-- timeline & chat end -->

    <!-- project team & activity start -->

    <!-- calender & widgets start -->
    <div class="row">
        <div class="col-lg-8">
            <section class="panel">
                <div class="panel-body">
                    <div id="calendar" class="has-toolbar"></div>
                </div>
            </section>
        </div>
        <div class="col-lg-4">

            <!--profile widget2 start-->
            <section class="panel profile-nav alt">
                <div class="profile-widget-img">
                    <div class="user-heading alt bg-layer ">
                        <a href="#">
                            <img alt="" src="img/profile-avatar.jpg">
                        </a>
                        <h1>John Fuller</h1>
                        <p>johnf@karmanta.com</p>
                    </div>
                </div>

                <div class="weather-category profile-widget-data">
                    <ul>
                        <li class="active">
                            <h5>150</h5>
                            Photos
                        </li>
                        <li>
                            <h5>5400</h5>
                            Following
                        </li>
                        <li>
                            <h5>85000</h5>
                            Followers
                        </li>
                    </ul>
                </div>
            </section>
            <!--profile widget2 end-->

            <!--weather widget start-->
            <section class="panel">
                <div class="weather-bg-img">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <h3>London</h3>
                                <i class="icon-cloud"></i>
                                <span>24/10/2013</span>
                            </div>
                            <div class="col-xs-6">
                                <div class="degree">
                                    20°
                                </div>
                                <div class="weather-type">
                                    Sunny
                                </div>
                            </div>
                        </div>
                        <div class="weather-category">
                            <ul>
                                <li class="active">
                                    <h5>humidity</h5>
                                    56%
                                </li>
                                <li>
                                    <h5>precip</h5>
                                    1.50 in
                                </li>
                                <li>
                                    <h5>winds</h5>
                                    10 mph
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <footer class="weather-days weather-bg-img">
                    <ul>
                        <li class="day1">
                            <h5>Thu</h5>
                            20°
                        </li>
                        <li class="day2">
                            <h5>Fri</h5>
                            22°
                        </li>
                        <li class="day3">
                            <h5>Sat</h5>
                            21°
                        </li>
                        <li class="day4">
                            <h5>Sun</h5>
                            24°
                        </li>
                        <li class="day5">
                            <h5>Mon</h5>
                            20°
                        </li>
                        <li class="day6">
                            <h5>Wed</h5>
                            20°
                        </li>
                    </ul>
                </footer>
            </section>
            <!--weather widget end-->

            <div class="panel">
                <div class="panel-body">
                    <div class="bio-chart">
                        <input class="knob" data-width="101" data-height="101" data-displayPrevious=true
                            data-thickness=".1" value="80" data-fgColor="#4cd964" data-bgColor="#e8e8e8">
                    </div>
                    <div class="bio-desk">
                        <h4 class="terques">Project Progress</h4>
                        <p>Started : 15 July</p>
                        <p> : 15 August</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- calender & widgets end -->
@endsection
