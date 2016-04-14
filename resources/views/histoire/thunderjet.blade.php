@extends('layouts.app')
{{--Inclusion des link CSS--}}
@section('linkrel')
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylePageAvions.css')}}"/>
@endsection

@section('pageAvions')
    <div id="contenuthenderjet">
        <img src="{{asset('img/pageavions_thunder_jet.jpg')}}" alt="thunder_jet" class="imgThunderJet">
        <div id="contenu">
            <h1>thunder jet</h1>
            <p class="description">description</p>
            <p class="textDescription">Le F-84 était parmi les premiers chasseurs d’après-guerre de l’U.S. Air Force.<br/>
                Il a fait son vol initial en février 1946, et a commencé à<br/>
                sortir des chaînes de production en juin 1947, et jusqu’à<br/> la fin de sa production en 1953.</p>
            <p class="textDescription2">
                Le Thunderjet mesure 10,60m de long et 3,83m de<br/> hauteur avec un turboréacteur Allison J35-A-29 et une<br/> puissance
                totale de 1 * 2 540 Kgp.
            </p>
            <button class="btn-jouer">Jouer</button>
        </div>
    </div>
@endsection