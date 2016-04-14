@extends('layouts.app')
{{--Inclusion des link CSS--}}
@section('linkrel')
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylePageAvions.css')}}"/>
@endsection

@section('pageAvions')
    <div id="contenuthenderjet">
        <img src="{{asset('img/pageavions_thunder_jet.jpg')}}" alt="thunder_jet" class="imgThunderJet">
        <div id="contenu">
            <h1>Magister</h1>
            <p class="description">description</p>
            <p class="textDescription">
                En 1952, le Magister est construit à Aire-sur-Adour. Le 23 juillet de cette année,<br/>
                le premier prototype s’envole. Cet avion d’entrainement se veut le plus proche<br/>
                possible des appareils opérationnels. Le premier Magister de série décollera le<br/>
                20 février 1956, alors que Salon de Provence reçoit son premier Fouga le 28 mai.</p>
            <p class="textDescription2">
                Le Magister mesure 12,15m de long et 10,06m de hauteur<br/>
                avec deux turboréacteurs Turboméca Marboré IIA et<br/>
                une puissance totale de 2 * 400 Kgp. Il comporte aussi<br/>
                deux mitrailleuse, deux bombes et quatre roquettes.
            </p>
            <img src="{{asset('icones/cadre_jouer.png')}}" alt="cadre_jouer" class="cadre_jouer">
            <a href="">jouer</a>
        </div>
    </div>
@endsection