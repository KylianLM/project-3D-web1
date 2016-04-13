{{--Appel du app.blade.php--}}
@extends('layouts.app')
{{--Inclusion des link CSS--}}
@section('linkrel')
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    @endsection

    {{--Première Section--}}
            <!-- Inclusion de la vidéo -->
@section('video')
    <div class="covervid-wrapper">
        <video class="covervid-video" autoplay loop poster="">
            <source src="{{asset("video/video.mp4")}}" type="video/mp4">
        </video>
    </div>
    @endsection

            <!-- Inclusion du bouton découvrir -->
    @section('button_decouvrir')
            <!-- Ghost button -->
    <div class="boutton">
        <a class="ghost-button" href="">DECOUVRIR</a>
    </div>
    @endsection

    {{--Fin de la première Section--}}

    {{--Deuxième section--}}
    @section('secondBloc')
        <div id="secondBloc">
            <ul>
                <li class="blocCascade1"><a href=""><img src="{{asset('img/thunder_jet.jpg')}}" alt=""><p>Thunder Jet</p></a></li>

                <li class="blocCascade2"><a href=""><img src="{{asset('img/ouragan.jpg')}}" alt=""><p>Ouragan</p></a></li>

                <li class="blocCascade3"><a href=""><img src="{{asset('img/mystere_iv.jpg')}}" alt=""><p>Mystère IV</p></a></li>

                <li class="blocCascade4"><a href=""><img src="{{asset('img/magister.jpg')}}" alt=""><p>Magister</p></a></li>

                <li class="blocCascade5"><a href=""><img src="{{asset('img/alphajet.jpg')}}" alt=""><p>AlphaJet</p></a></li>
            </ul>
        </div>
    @endsection
            <!-- Inclusion des scripts JS -->
    @section('script')
            <!-- Chargement des scripts -->
    <script src="{{asset('js/covervid.min.js')}}"></script>
    <script type="text/javascript">
        var secondBloc =document.querySelector('#secondBloc');
        var blocCascade1 = document.querySelector('.blocCascade1');
        var blocCascade2 = document.querySelector('.blocCascade2');
        var blocCascade3 = document.querySelector('.blocCascade3');
        var blocCascade4 = document.querySelector('.blocCascade4');
        var blocCascade5 = document.querySelector('.blocCascade5');
        var truc = false;

        $('.avion, .ghost-button').click(function(e){
            e.preventDefault();

            if(truc == false) {
                truc = true;
                $(secondBloc).fadeIn(1000);
                $(blocCascade1).fadeIn(1000);
                $(blocCascade2).fadeIn(1000);
                $(blocCascade3).fadeIn(1000);
                $(blocCascade4).fadeIn(1000);
                $(blocCascade5).fadeIn(1000);

                $(blocCascade1).animate({
                    height: "100%"
                }, 1000);

                $(blocCascade2).animate({
                    height: "100%"
                }, 800);

                $(blocCascade3).animate({
                    height: "100%"
                }, 600);

                $(blocCascade4).animate({
                    height: "100%"
                }, 400);

                $(blocCascade5).animate({
                    height: "100%"
                }, 200);
            }else if(truc == true){
                $(blocCascade1).animate({
                    height: "0%"
                }, 1000);

                $(blocCascade2).animate({
                    height: "0%"
                }, 800);

                $(blocCascade3).animate({
                    height: "0%"
                }, 600);

                $(blocCascade4).animate({
                    height: "0%"
                }, 400);

                $(blocCascade5).animate({
                    height: "0%"
                }, 200);

                $(secondBloc).fadeOut(500);
                truc = false;
            }
        });
    </script>
    <script type="text/javascript">
        coverVid(document.querySelector('.covervid-video'), 1920, 1080);
    </script>
@endsection
