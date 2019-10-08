<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{asset('img/dofusfavicon.png')}}"/>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @if(isset($title))
            <title>{{ $title }}</title>
        @else
            <title>{{ config('app.name', 'Laravel') }}</title>
        @endif

    <!-- Scripts and styling-->
        {{--        <script src="{{ asset('js/app.js') }}" defer></script>--}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('js/datatables.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/datatables2.min.js') }}" defer></script>


        <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">

        @stack('scripts')
        @stack('styles')


    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
                <div class="container-fluid" id="navbar">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f1/Dofus_logo.png/220px-Dofus_logo.png"
                            width="160px" height="100px">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav nav-pills nav-justified navbar-nav m-auto">
                            <li><a class="nav-item nav-link border-1 m-1" href="/daily">daily quest reminder z checkboxami - 3 w
                                    koalaku, almanax, keruby, sufokia</a></li>
                            <li>
                                <a class="nav-item nav-link border-1 m-1" href="/monsters/lists">Monster Soul Manager</a>
                            </li>
                            <li>
                                <a class="nav-item nav-link border-1 m-1" href="/events">dashboard do eventow + bonusy z almanaxa</a>
                            </li>
                            <li>
                                <a class="nav-item nav-link border-1 m-1" href="#">portale do zrobienia na dashboardzie</a>
                            </li>
                            <li><a class="nav-item nav-link border-1 m-1" href="/links">zbior przydatnych linkow - dofuspourlesnoobs,
                                    treasure hunt, dofuswiki</a></li>
                            <li><a class="nav-item nav-link border-1 m-1" href="/links">czat/forum</a></li>
                            <li><a class="nav-item nav-link border-1 m-1" href="/drop">Kalkulator dropow</a></li>

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
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
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
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>

    </body>
</html>
