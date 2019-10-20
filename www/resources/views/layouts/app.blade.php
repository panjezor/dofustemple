<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns/website#">
    <head>

        @if(isset($title))
            <title>{{ $title }}</title>
            <meta property="og:title"
                  content="{{ $title }}">
            <meta property="og:site_name" content="{{ $title }}">
        @else
            <title>{{ config('app.name') }}</title>
            <meta property=" og:title"
                  content="{{ config('app.name') }}">
            <meta property="og:site_name" content="{{ config('app.name') }}">
        @endif
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">

        <meta property="og:site_name" content="Dofus-Temple">
        <meta property="og:image"
              content="https://i.pinimg.com/originals/c3/ab/69/c3ab69355f4fb84c75686803e80fc806.jpg">
        <meta property="og:url" content="{{$_SERVER['REQUEST_URI']}}"/>

        <meta property="og:type" content="website">
        <meta property="og:description"
              content="Dofus Temple is a web portal for the members of Dofus Society to help them in daily tasks. Players, arise!">
        <meta property="twitter:site" content="@dofustemple">
        <meta charset="utf-8">
        <meta name="keywords"
              content="dofus, dofus temple, mmo, mmorpg, free mmorpg, free online mmorpg, video game, video game rental, video game system, free video game, online game, multiplayer game, free multiplayer game, dofus community, comics, pc game, pc game cheat, game, free game, online game, toy game, addictive game, addicting game">
        <meta name="Identifier-URL" content="dofus-temple.com">
        <meta property="fb:admins" content="filip.cieslik">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{asset('img/dofusfavicon.png')}}"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Scripts and styling-->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}"/>
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        @stack('styles')

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


        @stack('scripts')


    </head>
    <body>
        <div id="app">
            <span style="display: none">Dofus Temple is a web portal for the members of Dofus Society to help them in daily tasks. Players, arise!</span>
            <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
                <div class="container-fluid" id="navbar">
                    <a class="navbar-brand" href="{{ route('home') }}">
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
                            <li>
                                <a class="nav-item nav-link m-2"
                                   href="/monsters/lists">{{__('main.monster-soul-manager')}}</a>
                            </li>
                            <li><a class="nav-item nav-link m-2" href="/drop">{{__('main.drop-calculator')}}</a></li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('main.login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('main.register') }}</a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('main.logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf

                                        </form>
                                        <a class="dropdown-item"
                                           onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                            {{ __('main.profile') }}
                                        </a>

                                        <form id="profile-form" action="{{ route('profile') }}" method="POST"
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
            <footer class="page-footer font-small pt-4">
                <div class="container-fluid text-center text-md-left">
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <h5 class="text-uppercase"><a href="/to-do">{{__('main.development')}}</a></h5>
                            <p></p>
                        </div>
                        <hr class="clearfix w-100 d-md-none pb-3">
                    </div>
                </div>
                <div class="footer-copyright text-center py-3">© 2019 Copyright:
                    <a href="https://dofus-temple.com"> Dofus-Temple.com</a>
                </div>
            </footer>
        </div>
    </body>
</html>
