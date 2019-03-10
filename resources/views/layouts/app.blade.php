<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	    <title>PurrHub</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<!-- Icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Favicon -->
	<link rel="shorcut icon" href="{{ asset('caticon.ico') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

	@stack('estilos')
</head>
<body>
    <div id="app">
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="fas fa-cat"></i> PurrHub
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
						<li class="nav-item">
						  <a class="nav-link" href="/conciertos">Conciertos</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="/artistas">Artistas</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="/calendario">Calendario</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="/contacto">Contacto</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="/acercade">Acerca de</a>
						</li>
                    </ul>
                    <!-- Barra de búsqueda -->
                    <ul class="navbar-nav col-md-4 col-xl-5 ml-auto">
                        <form class="w-100" action="conciertos/buscarAjax" data-action="search">
                            <div class="input-group input-group-sm mt-2">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                                <input type="text" class="form-control mr-1 col-12" placeholder="" aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </form> 
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
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
<div class="container">
        <main class="py-4">
            @yield('content')
        </main>
	</div>
    </div>
    @stack('scripts')
        <script src="{{ mix('/js/general/ajaxSearch.js') }}" defer ></script>
    @stack('estilos')
	    <link href="{{ mix('/css/general/general.css') }}" rel="stylesheet">
</body>
</html>
