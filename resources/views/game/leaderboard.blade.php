@extends('layouts.app')
{{--Inclusion des link CSS--}}
@section('linkrel')
    <link rel="stylesheet" type="text/css" href="{{asset('css/leaderboard.css')}}"/>
@endsection

@section('leader')
    <ul>
        <h1>Classement</h1>
        <?php
        $editeurs = DB::table('users')->select('name', 'score')->orderBy('score', 'desc')->paginate(3);
        foreach ($editeurs as $editeur) { ?>
        <li><?= $editeur->name ?> <span><?= $editeur->score ?> points</span></li>
        <li><?= $editeur->name ?> <span><?= $editeur->score ?> points</span></li>
        <?php
        }
        ?>
    </ul>
@endsection

