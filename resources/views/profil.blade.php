@extends('layouts.app')
{{--Inclusion des link CSS--}}
@section('linkrel')
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleProfil.css')}}"/>
@endsection

@section('leader')
    <div id="contentprofil">
        <div id="profil">
            <div id="profilIdentite">
                <div class="imageProfil"></div>
                <img src="/uploads/<?= $data->img ?>" alt="">
                {{ Form::open(array('url'=>'upload  ','files'=>true)) }}
                {!! Form::file('image') !!}
                {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
                {!! Form::close() !!}
                <div id="desc">
                    <p class="pseudo"><?= $data->name ?></p>
                    <p class="email"><?= $data->email ?></p>
                    <img src="" alt="">
                    <p class="highScore">High score : <span><?= $data->score ?></span></p>
                </div>
            </div>
            <div id="profilDescription">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>

        <div id="sucess">
            <div id="badge">
                <ul>
                    <li><img src="{{asset("icones/badge1.png")}}" alt="badge1"></li>
                    <li><img src="{{asset("icones/badge2.png")}}" alt="badge2"></li>
                    <li><img src="{{asset("icones/badge3.png")}}" alt="badge3"></li>
                    <li><img src="{{asset("icones/badge4.png")}}" alt="badge4"></li>
                    <li><img src="{{asset("icones/badge5.png")}}" alt="badge5"></li>
                </ul>
            </div>
            <div id="progression">
                <img src="{{asset("icones/bare_progress.png")}}" alt="barre de progression" class="bare_progress">
                <p class="niveau">Novice</p>
                <p class="pourcentage">20%</p>
            </div>
        </div>
    </div>



@endsection