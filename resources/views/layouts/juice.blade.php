<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '<link rel="shortcut icon" href="https://z-1-scontent.fvno1-1.fna.fbcdn.net/v/t31.0-8/11244736_1614829665429228_2157117174550274940_o.jpg?oh=725b7734169ae83c2e21e5499c009afa&oe=5975E6DC"/>') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/juice.css') }}" rel="stylesheet">   
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Scripts -->

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src='//cloud.tinymce.com/stable/tinymce.min.js'></script>
   
</head>
<body>
    <header id="back_image">
            <div id="vertical_text">
                <h3>UAB Inroma - Sulčių spaudimas!</h3>
            </div>
            <div id="vertical_text2">
                <h3>Tel. +37062616515</h3>
            </div>
    </header>

    <div id="app" class="borders">
        <nav>
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
                    <!-- <a class="navbar-brand" href="{{ url('https://www.facebook.com/uabinroma/?fref=ts') }}">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i> -->
                  <!--   </a> -->
                    <nav class="mainnavigation">
                        <ul class="nav nav-pills">
                            <li><a href="/">Grįžti į pagrindinį</a></li>
                            <li><a href="/aboutthree">Apie mus</a></li>
                            <li><a id="demo" href="/juice">Išpilstymo taros</a></li>
                            @if(Auth::user() && Auth::user()->isAdmin())
                            <li><a href="/orders">Klausimai</a></li>
                            @endif
                            <li><a href="/contactsthree">Kontaktai</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Atsijungti
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
                <div>
                    @if(Auth::user() && Auth::user()->isAdmin())
                        <a href="{{ route('juice.create') }}" class="btn btn-success">Naujas sulčių produktas</a>
                        <a href="{{ route('contacts.create') }}" class="btn btn-danger">Naujas kontaktu langas</a>
                        <a href="{{ route('about.create') }}" class="btn btn-primary">Naujas apie mus </a>
                    @endif
                </div>
            </div>
        </nav>
        
        @yield('content')

    </div>
       <footer class="container">
            <div  id="text">
            <h3> © 2017 „UAB Inroma" inroma30@gmail.com </h3> 
                <iframe  src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fuabinroma%2F&tabs=timeline&width=500&height=150&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="max" height="auto" style="border:none;overflow:hidden" scrolling="yes" frameborder="0" allowTransparency="true"></iframe>
            </div> 
       </footer>
    <!-- Scripts -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.js"
      integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
      crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
