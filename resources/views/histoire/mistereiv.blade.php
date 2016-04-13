@extends('layouts.app')
{{--Inclusion des link CSS--}}
@section('linkrel')
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylePageAvions.css')}}"/>
@endsection

@section('pageAvions')
    <div id="contenuthenderjet">
        <img src="{{asset('img/pageavions_thunder_jet.jpg')}}" alt="thunder_jet" class="imgThunderJet">
        <div id="contenu">
            <h1>Mystère IV</h1>
            <p class="description">description</p>
            <p class="textDescription">
                Il s’agissait au départ d’un prototype expérimental, ne devant pas être produit<br/>
                en série. L’appareil, appelé MD.454 Mystère IV 01, était uniquement destiné à<br/>
                tester une nouvelle aile plus fine. Le prototype vola en septembre 1952 et les<br/> premiers essais révélèrent un appareil très réussi, de classeinternationale.</p>
            <p class="textDescription2">
                Le Mystère IV mesure 11,12m de long et 12,89m de<br/>
                hauteur avec 1 turboréacteur Hispano-Suiza Verdon 350<br/>
                et une puissance totale de 1 * 3 500 Kgp.
            </p>
            <img src="{{asset('icones/cadre_jouer.png')}}" alt="cadre_jouer" class="cadre_jouer">
            <a href="">jouer</a>
        </div>
    </div>
@endsection