<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description"
        content="El Sindicato Nacional de Trabajadores de la Educaci&oacute;n lo integran trabajadores de base, permanentes, interinos y transitorios al servicio de la educación, dependientes de la Secretaría de Educaci&oacute;n Pública">
    <meta name="keyword" content="Sección 56 del Sindicato Nacional de Trabajadores de la Educación">
    <title>Org :: NET | @yield('title')</title>

    <link href="{{asset('css/coreui-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/simple-line-icons.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/pace.min.css')}}" rel="stylesheet">
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>

    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-118965717-1', 'auto');
    ga('send', 'pageview');
    </script>
    <style type="text/css">
    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
        from {
            opacity: 0.99
        }

        to {
            opacity: 1
        }
    }

    @keyframes chartjs-render-animation {
        from {
            opacity: 0.99
        }

        to {
            opacity: 1
        }
    }

    .chartjs-render-monitor {
        -webkit-animation: chartjs-render-animation 0.001s;
        animation: chartjs-render-animation 0.001s;
    }
    </style>
    <style type="text/css">
    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
        from {
            opacity: 0.99
        }

        to {
            opacity: 1
        }
    }

    @keyframes chartjs-render-animation {
        from {
            opacity: 0.99
        }

        to {
            opacity: 1
        }
    }

    .chartjs-render-monitor {
        -webkit-animation: chartjs-render-animation 0.001s;
        animation: chartjs-render-animation 0.001s;
    }
    </style>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show   pace-done">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img class="navbar-brand-full" src="{{asset('img/brand/logo.svg')}}" width="89" height="25"
                alt="CoreUI Logo">
            <img class="navbar-brand-minimized" src="{{asset('img/brand/sygnet.svg')}}" width="30" height="30"
                alt="CoreUI Logo">
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav ml-auto">


            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        <i class="fa fa-unlock"></i> |
                        <strong>Inicia sesión</strong> &nbsp &nbsp &nbsp &nbsp
                    </a>
                </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fa fa-unlock"></i> |
                        <strong>{{ Auth::user()->name }}</strong> &nbsp
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-center">
                            <strong>Configuración</strong>
                        </div>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-user"></i> Perfil</a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-wrench"></i> Configuración</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fa fa-lock"></i> Cerrar sesión </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
                <li class="nav-item"></li>
        </ul>
    </header>
    <div class="app-body">
        <div class="sidebar">
            @include('layouts.sidebar')
        </div>
        <!-- Inicio de contenido -->
        @yield('content')
        <!-- Fin de Div contenido -->

        <aside class="aside-menu">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                        <i class="icon-list"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                        <i class="icon-speech"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                        <i class="icon-settings"></i>
                    </a>
                </li>
            </ul>
        </aside>
    </div>
    <footer class="app-footer">
        <div>
            <a href="https://coreui.io/pro/">CoreUI Pro</a>
            <span>© 2018 creativeLabs.</span>
        </div>
        <div class="ml-auto">
            <span>Powered by</span>
            <a href="https://coreui.io/pro/">CoreUI Pro</a>
        </div>
    </footer>

    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/perfect-scrollbar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/coreui.min.js')}}"></script>
    <script>
    /* $('#ui-view').ajaxLoad();
    $(document).ajaxComplete(function() {
        Pace.restart()
    }); */
    </script>

    <script type="text/javascript" src="{{asset('js/jquery.dataTables.js')}}" class="view-script"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.bootstrap4.js')}}" class="view-script"></script>
    <script type="text/javascript" src="{{asset('js/datatables.js')}}" class="view-script"></script>
</body>

</html>