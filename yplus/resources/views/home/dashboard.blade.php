<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" href="img/favicon.ico" />

  <title>Yplus</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/font-awesome/css/font-awesome47.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <link href="css/custom.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

  <style>
    body {
      max-width: 100%;
      overflow-x: hidden !important;
    }

    .largebtn {
      height: auto;
    }


    /* custom scrollbar */
    ::-webkit-scrollbar {
      width: 20px;
    }

    ::-webkit-scrollbar-track {
      background-color: transparent;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #777;
      border-radius: 20px;
      border: 6px solid transparent;
      background-clip: content-box;
    }

    ::-webkit-scrollbar-thumb:hover {
      background-color: #a8bbbf;
    }

    @media (max-width: 767px) {
      body {
        overflow: auto !important;
        -webkit-overflow-scrolling: touch !important;
        padding-bottom: 50px !important;
      }

      .bottom-nav {
        display: block !important;
      }

      .largebtn {
        height: 40px;
        font-size: 18px;
      }
    }
  </style>
  <script>

  </script>
</head>


<body class="dark">
  <div style="display:none" id="tkyplus">{{ session('tkyplus') }}</div>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">
        </div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo"><img src="img/Yplus-logo-sm.png"></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>
      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- alert contas a receber start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

              <i class="icon-signin"></i>
              <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">Você tem 2 contas a receber</p>
              </li>
              <li>
                <a href="#">
                  <span class="label label-primary"><i class="icon-sitemap"></i></span>
                  Fabiano [222b]
                  <span class="small italic pull-right">10/02/2016</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-warning"><i class="icon_pin"></i></span>
                  Patricia [161]
                  <span class="small italic pull-right">10/02/2016</span>
                </a>
              </li>

              <li>
                <a href="#">Ver todas as contas</a>
              </li>
            </ul>
          </li>
          <!-- alert contas a receber end-->
          <!-- alert contas a pagar start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

              <i class="icon-signout"></i>
              <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">Você tem 3 contas a pagar</p>
              </li>
              <li>
                <a href="#">
                  <span class="label label-primary"><i class="icon_profile"></i></span>
                  Copel / Luz
                  <span class="small italic pull-right">07/02/2016</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-warning"><i class="icon_pin"></i></span>
                  Aluguel
                  <span class="small italic pull-right">30/02/2016</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-danger"><i class="icon_book_alt"></i></span>
                  Condomínio
                  <span class="small italic pull-right">05/02/2016</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-success"><i class="icon_like"></i></span>
                  GVT / internet
                  <span class="small italic pull-right"> 15/02/2016</span>
                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert contas a pagar end-->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="icon-calendar-empty"></i>
              <span class="badge bg-important">5</span>
            </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                  <span class="subject">
                    <span class="from">Greg Martin</span>
                    <span class="time">1 min</span>
                  </span>
                  <span class="message">
                    I really like this admin panel.
                  </span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                  <span class="subject">
                    <span class="from">Bob Mckenzie</span>
                    <span class="time">5 mins</span>
                  </span>
                  <span class="message">
                    Hi, What is next project plan?
                  </span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                  <span class="subject">
                    <span class="from">Phillip Park</span>
                    <span class="time">2 hrs</span>
                  </span>
                  <span class="message">
                    I am like to buy this Admin Template.
                  </span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                  <span class="subject">
                    <span class="from">Ray Munoz</span>
                    <span class="time">1 day</span>
                  </span>
                  <span class="message">
                    Icon fonts are great.
                  </span>
                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <span class="icon-check"></i>
                <span class="badge bg-info">5</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 pending tasks</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->

          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

              <i class="icon-globe"></i>
              <span class="badge bg-info">7</span>
            </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 4 new notifications</p>
              </li>
              <li>
                <a href="#">
                  <span class="label label-primary"><i class="icon_profile"></i></span>
                  Friend Request
                  <span class="small italic pull-right">5 mins</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-warning"><i class="icon_pin"></i></span>
                  John location.
                  <span class="small italic pull-right">50 mins</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-danger"><i class="icon_book_alt"></i></span>
                  Project 3 Completed.
                  <span class="small italic pull-right">1 hr</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="label label-success"><i class="icon_like"></i></span>
                  Mick appreciated your work.
                  <span class="small italic pull-right"> Today</span>
                </a>
              </li>
              <li>
                <a href="#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <span class="profile-ava">
                <img width="30px" alt="" src="{{ session('avatar') }}">
              </span>
              <span class="username">{{ session('name') }}</span>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.html">
              <i class="icon_desktop"></i>
              <span>Y-Painel</span>
            </a>
          </li>
          <li class="">
            <a class="" href="index.html">
              <i class="icon-tasks"></i>
              <span>Tarefas</span>
            </a>
          </li>
          <li class="sub-menu">
            <a class="" href="javascript:;">
              <i class="icon_currency"></i>
              <span>Financeiro</span>
              <span class="menu-arrow arrow_carrot-right"></span>
              <span class="label label-info pull-right mail-info ">5</span>
            </a>
            <ul class="sub">
              <li><a class="" href="general.html">Contas a pagar</a></li>
              <li><a class="" href="buttons.html">Contas a receber</a></li>
              <li><a class="" href="sliders.html">+Despesa</a></li>
              <li><a class="" href="font_awesome.html">+Receita</a></li>
              <li><a class="" href="elegant-icon-font.html">Fatura cartão</a></li>
              <li><a class="" href="grids.html">Gerenciar</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="" href="javascript:;">
              <i class="icon-edit"></i>
              <span>Estudos</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="general.html">Faculdade</a></li>
              <li><a class="" href="buttons.html">Cursos</a></li>
              <li><a class="" href="sliders.html">Autodidata</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="" href="javascript:;">
              <i class="icon-heart"></i>
              <span>Saúde</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="general.html">Alimentação</a></li>
              <li><a class="" href="buttons.html">Acompanhamento</a></li>
              <li><a class="" href="sliders.html">Remédios</a></li>
              <li><a class="" href="sliders.html">Exames</a></li>
              <li><a class="" href="sliders.html">Prevenção</a></li>
            </ul>
          </li>
          <li>
            <a class="" href="calendar.html">
              <i class="icon_calendar"></i>
              <span>Calendário</span>

            </a>
          </li>
          <li>
            <a class="" href="{{ route('logout.perform') }}">
              <i class="s"></i>
              <span>Logout</span>

            </a>
          </li>
          <span style="display:none;">
            <li class="active">
              <a class="" href="index.html">

                <br><br>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_desktop"></i>
                <span>UI Kit</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="general.html">General</a></li>
                <li><a class="" href="buttons.html">Buttons</a></li>
                <li><a class="" href="sliders.html">Sliders</a></li>
                <li><a class="" href="font_awesome.html">Font Awesome</a></li>
                <li><a class="" href="elegant-icon-font.html">Elegant Icon Font</a></li>
                <li><a class="" href="grids.html">Grids</a></li>
              </ul>
            </li>
            <li>
              <a class="" href="widgets.html">
                <i class="icon_genius"></i>
                <span>Widgets</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_piechart"></i>
                <span>Charts</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="chart-chartjs.html">ChartJs</a></li>
                <li><a class="" href="chart-morris.html">Morris</a></li>
                <li><a class="" href="chart-sparkline.html">Sparkline</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_document_alt"></i>
                <span>Form Stuff</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="form_component.html">Form Components</a></li>

                <li><a class="" href="form_validation.html">Form Validation</a></li>
              </ul>
            </li>
            <li>
              <a class="" href="inbox.html">
                <i class="icon_mail_alt"></i>
                <span>Mail </span>
                <span class="label label-danger pull-right mail-info badge">2</span>
              </a>
            </li>
            <li>
              <a class="" href="calendar.html">
                <i class="icon_calendar"></i>
                <span>Calendar</span>
                <span class="label label-danger pull-right mail-info badge">5</span>
              </a>
            </li>

            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_table"></i>
                <span>Tables</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="basic_table.html">Basic Table</a></li>
                <li><a class="" href="dynamic_table.html">Dynamic Table</a></li>
              </ul>
            </li>

            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_documents_alt"></i>
                <span>Pages</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="profile.html">Profile</a></li>
                <li><a class="" href="invoice.html">Invoice</a></li>
                <li><a class="" href="timeline.html">Timeline</a></li>
                <li><a class="" href="chat.html">Chat</a></li>
                <li><a class="" href="faqs.html">FAQs</a></li>
                <li><a class="" href="blank.html">Blank Page</a></li>
                <li><a class="" href="404.html">404 Error</a></li>
                <li><a class="" href="500.html">500 Error</a></li>
              </ul>
            </li>
            <li>
              <a class="" href="login.html">
                <i class="icon_key_alt"></i>
                <span>Login Page</span>
              </a>
            </li>
          </span>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
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
                      <img src="{{ session('avatar') }}" alt="">
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
                          <input class="knob" data-readonly="true" data-width="80" data-height="80" data-displayPrevious=true data-thickness=".1" value="75" data-fgColor="#007AFF" data-bgColor="#F7F7F7">
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
                          <input class="knob" data-readonly="true" data-width="80" data-height="80" data-displayPrevious=true data-thickness=".1" value="25" data-fgColor="#34AADC" data-bgColor="#F7F7F7">
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
                          <input class="knob" data-readonly="true" data-width="80" data-height="80" data-displayPrevious=true data-thickness=".1" value="85" data-fgColor="#FF2D55" data-bgColor="#F7F7F7">
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
                          <input class="knob" data-readonly="true" data-width="80" data-height="80" data-displayPrevious=true data-thickness=".1" value="95" data-fgColor="#34AADC" data-bgColor="#F7F7F7">
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
                          <input class="knob" data-readonly="true" data-width="80" data-height="80" data-displayPrevious=true data-thickness=".1" value="65" data-fgColor="#007AFF" data-bgColor="#F7F7F7">
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
                    <div class="value tooltips" data-original-title="85%" data-toggle="tooltip" data-placement="top">85%</div>
                  </div>
                  <div class="bar doted">
                    <div class="title">FEB</div>
                    <div class="value tooltips" data-original-title="36%" data-toggle="tooltip" data-placement="top">36%</div>
                  </div>
                  <div class="bar ">
                    <div class="title">MAR</div>
                    <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                  </div>
                  <div class="bar doted">
                    <div class="title">APR</div>
                    <div class="value tooltips" data-original-title="65%" data-toggle="tooltip" data-placement="top">65%</div>
                  </div>
                  <div class="bar">
                    <div class="title">MAY</div>
                    <div class="value tooltips" data-original-title="30%" data-toggle="tooltip" data-placement="top">30%</div>
                  </div>
                  <div class="bar doted">
                    <div class="title">JUN</div>
                    <div class="value tooltips" data-original-title="95%" data-toggle="tooltip" data-placement="top">95%</div>
                  </div>
                  <div class="bar">
                    <div class="title">JUL</div>
                    <div class="value tooltips" data-original-title="45%" data-toggle="tooltip" data-placement="top">45%</div>
                  </div>
                  <div class="bar doted">
                    <div class="title">AUG</div>
                    <div class="value tooltips" data-original-title="85%" data-toggle="tooltip" data-placement="top">85%</div>
                  </div>
                  <div class="bar ">
                    <div class="title">SEP</div>
                    <div class="value tooltips" data-original-title="70%" data-toggle="tooltip" data-placement="top">70%</div>
                  </div>
                  <div class="bar doted">
                    <div class="title">OCT</div>
                    <div class="value tooltips" data-original-title="55%" data-toggle="tooltip" data-placement="top">55%</div>
                  </div>
                  <div class="bar ">
                    <div class="title">NOV</div>
                    <div class="value tooltips" data-original-title="35%" data-toggle="tooltip" data-placement="top">35%</div>
                  </div>
                  <div class="bar doted">
                    <div class="title">DEC</div>
                    <div class="value tooltips" data-original-title="95%" data-toggle="tooltip" data-placement="top">95%</div>
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
                  <div class="sparkline" data-type="line" data-resize="true" data-height="120" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[150,200,637,233,536,936,464,153,891,568,955,999]"></div>
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
                          <p><a href="#">Robert Yates</a> added new file <span><a href="#" class="green">abc.img</a></span></p>
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
                          <p><a href="#">Jesse Pena</a> added new album <span><a href="#" class="blue">PICNIC</a></span></p>
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
                          <p><a href="#">Jonatha Smith</a> added new milestone <span><a href="#" class="light-green">UI Demo</a></span></p>
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
                  <input class="knob" data-width="101" data-height="101" data-displayPrevious=true data-thickness=".1" value="80" data-fgColor="#4cd964" data-bgColor="#e8e8e8">
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



      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->


  <style>
    .bottom-nav {
      display: none;
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #313131;
      box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
      z-index: 999;
      box-sizing: border-box;
    }

    .bottom-nav ul {
      display: flex;
      justify-content: space-around;
      align-items: center;
      height: 55px;
      margin: 0;
      padding: 0;
    }

    .bottom-nav li {
      list-style: none;
    }

    .bottom-nav button {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 100%;
      padding: 8px;
      border: none;
      background-color: transparent;
      color: #ddd;
      font-size: 14px;
      font-weight: bold;
      text-align: center;
      text-decoration: none;
    }

    .bottom-nav button i {
      font-size: 20px;
      margin-bottom: 4px;
    }

    .bottom-nav button.active {
      color: #00a8cc;
    }
  </style>
  <nav class="bottom-nav">
    <ul>
      <li><button><i class="fa fa-home"></i><span>Home</span></button></li>
      <li><button><i class="fa fa-gift"></i><span>Desejos</span></button></li>
      <li><button><i class="fa fa-child"></i><span>Kids</span></button></li>
      <li><button><i class="fa fa-plus"></i><span>Entrada</span></button></li>
      <li><button><i class="fa fa-credit-card"></i><span>Saída</span></button></li>
    </ul>
  </nav>

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
  <!--script for this page only-->
  <script src="js/calendar-custom.js"></script>
  <!-- custom select -->
  <script src="js/jquery.customSelect.min.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
  <!-- custom script for this page-->
  <script src="js/sparkline-chart.js"></script>
  <script src="js/easy-pie-chart.js"></script>
  <script src="app.js"></script>

  <script>
    //knob
    $(function() {
      $(".knob").knob({
        'draw': function() {
          $(this.i).val(this.cv + '%')
        }
      })
    });

    //carousel
    $(document).ready(function() {
      $("#owl-slider").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true

      });
    });

    //custom select box

    $(function() {
      $('select.styled').customSelect();
    });
  </script>

</body>

</html>