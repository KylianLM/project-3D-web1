@extends('layouts.app')
{{--Inclusion des link CSS--}}
@section('linkrel')
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylePageAvions.css')}}"/>
@endsection

@section('pageAvions')
    <div id="contenuthenderjet">
        <img src="{{asset('img/pageavions_thunder_jet.jpg')}}" alt="thunder_jet" class="imgThunderJet">
        <div id="contenu">
            <h1>ouragan</h1>
            <p class="description">description</p>
            <p class="textDescription">Premier avion à réaction opérationnel réalisé par la France, le Dassault MD.450<br/> Ouragan fut
                construit en dehors de tout marché. Son prototype prit l’air pour la<br/> première fois le 28 février 1949
                sans armement ni habitacle pressurisé.</p>
            <p class="textDescription2">
                L'ouragan mesure 10,74m de long et 4,14m de hauteur<br/> avec un turboréacteur Rolls Royce Nene MK104B et
                une<br/> puissance totale de 1 * 2270 Kgp. Il comporte aussi<br/> quatre canons de 20 mm et 908 kg de bombes.
            </p>
            <button class="btn-jouer">Jouer</button>
        </div>
    </div>
@endsection