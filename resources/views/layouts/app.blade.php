<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!} -->
    {!! Html::style('vendor/font-awesome/css/font-awesome.min.css') !!}
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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
                        <i class="fa fa-home"></i> {{ config('app.name', 'Laravel') }}
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
                            <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
                            <li><a href="{{ url('/register') }}"><i class="fa fa-edit"></i> Register</a></li>
                        @else
                        <li><a href="{{ url('/article/create') }}"><i class="fa fa-plus"></i> Create Article</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i>  Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
        @yield('content')
        </div>
    </div>

    <!-- Footer -->
    <hr>
    <footer>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="col-md-8">
        <a href="#">Terms of Service</a>
      </div>
    <div class="col-md-4">
        <span class="pull-right">© {{ date('Y')}} {{ config('app.name', 'Laravel') }}. All rights reserved</span>
    </div>
    </div>
    </div>
    </div>
    </footer>
    <!-- Footer -->
    <br>
    <!-- Scripts -->
    {!! Html::script('vendor/jquery/jquery.min.js') !!}
    <script src="/js/app.js"></script>
</body>
</html>
