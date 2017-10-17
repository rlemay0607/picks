<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/fav.jpeg">
    <link rel="stylesheet" href="/stylesheets/3eba4af4.main.css"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel ={!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())


                        @else
                            @if (Auth::user()-> admin=='1')
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Admin <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                        <a href="{{ route('users') }}">Users <span class="badge">{{ \App\User::count() }}</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('settings') }}">Settings</a>
                                        </li>


                                        <li>
                                            <a href="{{ route('mastergame.index') }}">Master Game</a>
                                        </li>

                                        <li>
                                            <a href="{{route('admin.user.pick')}}">User Picks </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('create.sheet') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('create-sheet').submit();">
                                                Create User Sheets <span class="badge">{{ \App\User::where([['week_created', '!=' , \App\Setting::first()->week_number],['active','1']])->count() }}</span>
                                            </a>

                                            <form id="create-sheet" action="{{ route('create.sheet') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>

                                    </ul>
                                </li>

                            @endif

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Help <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('about') }}">About</a> </li>
                                    </ul>
                                </li>


                                <li><a href="{{ route('currentweek.pick') }}">My Weeks Picks</a> </li>
                                <li><a href="{{ route('weekly.winners') }}">Weekly Winners</a> </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>



                            </li>
                            <li>
                                <a href="{{ url('/') }}">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </li>
                        @endif


                    </ul>


                </div>
            </div>
        </nav>
        @include('layouts.space')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
