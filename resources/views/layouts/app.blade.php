<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Recursos Humanos') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('boostrap/js/bootstrap.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('boostrap/css/bootstrap.min.css') }}" rel="stylesheet">
    

</head>
<body>
 <!-- Right Side Of Navbar -->
 
                        <!-- Authentication Links -->
                        @guest
                           
                            <div id="app">
        <nav class=" navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!--
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto ">

                        <!-- BARRA DE NAVEGACION -->
                        

                        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
                            <a class="navbar-brand" href="{{ url('/') }}">Recursos Humanos</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            
                            <ul class="navbar-nav">
                                
                               <!-- 
                                <li class="nav-item dropdown" >
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Liquidación
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" class="navbar-nav">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Coordinación de personal
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/index') }}">Novedades</a>
                                </li>-->
                                </ul>
                            </div>
                            </nav>

                        <!--////////////////////////// -->

                    </ul>
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif

                        @else
                        <div id="app">
        <nav class=" navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!--
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <!-- BARRA DE NAVEGACION -->
                        

                        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
                            <a class="navbar-brand" href="{{ url('/home') }}">Recursos Humanos</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            
                            <ul class="navbar-nav">
                                
                                
                                <li class="nav-item dropdown" >
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Liquidación
                                    </a>

                                    
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" class="navbar-nav">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Añadir
                                    </a>
                                    <a class="dropdown-item" href="{{action('InstitucionPlanillaController@create') }}">Alta y baja</a>
                                    <a class="dropdown-item" href="{{ action('InstitucionPlanillaController@create') }}">Planilla novedades</a>
                                    <a class="dropdown-item" href="{{ action('InstitucionPlanillaController@create') }}">Planilla otras novedades</a>
                                    <a class="dropdown-item" href="{{ url('/filtrar') }}">Filtrar planillas</a>
                                    <a class="dropdown-item" href="{{action('DescargaController@index')}}">Descargar Planilla</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Coordinación de personal
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{action('DeclaracionJurada@vista') }}" >F2 Declaración jurada de Cargo</a>
                                    <a class="dropdown-item" href="{{action('PofController@vista') }}">Actualización de datos personal vinculado y transferido</a>
                                    <a class="dropdown-item" href="{{ url('/documentos') }}">Ver documentos</a>
                                    <!-- el ultimo link es para coord. de persanal -->
                                    <a class="dropdown-item" href="{{action('AdministracionDocumentos@vista') }}">Administrar Documentos</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/index') }}">Novedades</a>
                                </li>
                                </ul>
                            </div>
                            </nav>

                        <!--////////////////////////// -->

                    </ul>
                    <ul class="navbar-nav ml-auto">

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

