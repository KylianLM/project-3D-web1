@extends('layouts.app')
{{--Inclusion des link CSS--}}
@section('linkrel')
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylePageAvions.css')}}"/>
@endsection

@section('pageAvions')
    <div id="contenuthenderjet">
        <img src="{{asset('img/pageavions_thunder_jet.jpg')}}" alt="thunder_jet" class="imgThunderJet">
        <div id="contenu">
            <h1>Alpha Jet</h1>
            <p class="description">description</p>
            <p class="textDescription">
                Conçu et construit par les industries aéronautiques française (Dassaault-<br/>
                Breguet) et allemande(Dornier), l’Alpha Jet est l’un des jets légers<br/>
                d’entraînement et d’appui de la nouvelle génération.
                Les performances et la<br/>
                sûreté de l’Alphajet ont assuré avec succès, depuis 1981, le remplacement des<br/>
                Fouga Magister de la Patrouille de France.</p>
            <p class="textDescription2">
                L'Alpha Jet mesure 9,11m de long et 12,29m de hauteur<br/>
                avec deux turboréacteurs SNECMA-Turboméca Larzac<br/>
                04-G5 et une puissance totale de 2 * 1350 Kgp.
            </p>
            <a href="/game5"><button class="btn-jouer">Jouer</button></a>
        </div>
    </div>
@endsection