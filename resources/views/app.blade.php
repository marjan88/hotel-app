<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,
              initial-scale=1">
        <title>Hotel App</title>
        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="{{asset('assets/site/app.css')}}" rel="stylesheet">
       
        
         @yield('style')
        <!-- HTML5 shim and Respond.js for IE8 support
        of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view
        the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/
        html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/
        respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Hotel App</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li @if(\Request::is('/') || \Request::is('user')) class="active" @endif><a href="/">Home</a></li>                      
                      @if (Auth::user())
                       <li @if(\Request::is('accommodation*')) class="active" @endif><a href="{{route('accommodation.create')}}">Reserve room</a></li>     
                      @endif
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li @if(\Request::is('auth/login')) class="active" @endif ><a href="/auth/login">Login</a></li>
                        <li><a href="/auth/register">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/auth/logout">Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

        
        @yield('content')
        </div>
        <!-- Scripts -->
        @section('scripts')

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        @show
    </body>
</html>