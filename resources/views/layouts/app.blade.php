<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

        <!-- Styles -->
        {{--<link href="xhttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
        <link rel="stylesheet" href="{{asset('css/reset.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/style_menu.css')}}">
        @yield('linkrel')
    </head>
    <body id="app-layout">
        <header>
            <!-- Header & Navigation -->
            <div class="logo">
                <a class="logo" href="/"><img class="logo" src="{{asset("img/Logo.png")}}"></a>
            </div>
            <a href="" class="lienIconMenu"><img src="{{asset("icones/menu.png")}}" alt="menu" class="iconmenu"></a>
            <nav>
                <ul class="headerNavigation">
                    {{--<li><a href=""><img src="{{asset("icones/building.png")}}"></a></li>--}}
                    <li><a href="/game"><img src="{{asset("icones/multimedia.png")}}"></a></li>
                    <li><a href="/register"><img src="{{asset("icones/social.png")}}"></a></li>
                    <li><a href="" class="avion"><img src="{{asset("icones/avion.png")}}"></a></li>
                </ul>
            </nav>
        </header>
        {{--Première section--}}
        @yield('video')
        @yield('button_decouvrir')
        @yield('2epage')
        {{--Fin de la première section--}}

        {{--Deuxième section--}}
        @yield('secondBloc')
        @yield('content')

        {{--Page des Avions--}}
        @yield('pageAvions')


        <!-- JavaScripts -->
        <script src="{{asset("js/jquery-1.12.3.min.js")}}"></script>
        <script src="{{asset("js/animation_menu.js")}}"></script>
        @yield('script')
        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    </body>
</html>
