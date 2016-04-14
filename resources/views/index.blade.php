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
        <video muted class="covervid-video" autoplay loop poster="">
            <source src="{{asset("video/video.mp4")}}" type="video/mp4">
        </video>
    </div>
    <div class="cover"></div>
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
                <li class="blocCascade1"><a href="" class="lienthunder"><img src="{{asset('img/thunder_jet.jpg')}}" alt=""><p>Thunder Jet</p></a></li>

                <li class="blocCascade2"><a href="" class="lienouragan"><img src="{{asset('img/ouragan.jpg')}}" alt=""><p>Ouragan</p></a></li>

                <li class="blocCascade3"><a href="" class="lienmystere"><img src="{{asset('img/mystere_iv.jpg')}}" alt=""><p>Mystère IV</p></a></li>

                <li class="blocCascade4"><a href="" class="lienmagister"><img src="{{asset('img/magister.jpg')}}" alt=""><p>Magister</p></a></li>

                <li class="blocCascade5"><a href="" class="lienalphajet"><img src="{{asset('img/alphajet.jpg')}}" alt=""><p>AlphaJet</p></a></li>
            </ul>
        </div>
        <div id="apparitionDiv"></div>
    @endsection
            <!-- Inclusion des scripts JS -->
    @section('script')
            <!-- Chargement des scripts -->
    <script src="{{asset('js/covervid.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/apparitionDesAvions.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/redirectionPage.js')}}"></script>
    <script type="text/javascript">
        coverVid(document.querySelector('.covervid-video'), 1920, 1080);
    </script>
@endsection
