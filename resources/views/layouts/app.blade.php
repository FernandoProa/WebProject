<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <title>
            Hello, world!
        </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
            <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
            <!--     Fonts and icons     -->
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" rel="stylesheet" type="text/css"/>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
                <!-- Material Kit CSS -->
                <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet"/>
            </link>
        </meta>
    </head>
    <body>
        <div class="wrapper ">
            <div class="sidebar" data-background-color="white" data-color="purple">
                <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
                <div class="logo">
                    <a class="simple-text logo-mini" href="http://www.creative-tim.com">
                        Logo bien bonis
                    </a>
                    <a class="simple-text logo-normal" href="http://www.creative-tim.com">
                        Biblioteca Bonfil :v
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item active ">
                            <a class="nav-link" href="#0">
                                <i class="material-icons">
                                    dashboard
                                </i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <!-- your sidebar here -->
                    </ul>
                     <ul class="nav">
                        <li class="nav-item  ">
                            <a class="nav-link" href="#0">
                                <i class="material-icons">
                                    book
                                </i>
                                <p>
                                    Libros
                                </p>
                            </a>
                        </li>
                        <!-- your sidebar here -->
                    </ul>
                       <ul class="nav">
                        <li class="nav-item  ">
                            <a class="nav-link" href="#0">
                                <i class="material-icons">
                                    account_circle
                                </i>
                                <p>
                                    Usuarios
                                </p>
                            </a>
                        </li>
                        <!-- your sidebar here -->
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a class="navbar-brand" href="javascript:;">
                                Dashboard
                            </a>
                        </div>
                        <button aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-toggle="collapse" type="button">
                            <span class="sr-only">
                                Toggle navigation
                            </span>
                            <span class="navbar-toggler-icon icon-bar">
                            </span>
                            <span class="navbar-toggler-icon icon-bar">
                            </span>
                            <span class="navbar-toggler-icon icon-bar">
                            </span>
                        </button>
                       <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-right">
                    @guest
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li> -->
                            @if (Route::has('register'))
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li> -->
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                              
                                
                            </li>
                        @endguest
                </ul>
            </div>
                    </div>
                </nav>
                <!-- End Navbar -->
                <div class="content">
                    <div class="container-fluid">
                        <!-- your content here -->
                        @yield('content')
                    </div>
                </div>
                <!-- <footer class="footer">
                    <div class="container-fluid">
                        <nav class="float-left">
                            <ul>
                                <li>
                                    <a href="https://www.creative-tim.com">
                                        Creative Tim
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright float-right">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            , made with
                            <i class="material-icons">
                                favorite
                            </i>
                            by
                            <a href="https://www.creative-tim.com" target="_blank">
                                Creative Tim
                            </a>
                            for a better web.
                        </div>
                         your footer here
                    </div>
                </footer> -->
            </div>
        </div>
    </body>
</html>