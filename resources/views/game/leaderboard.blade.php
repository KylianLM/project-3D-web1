@extends('layouts.app')

@section('content')
 <ul>
 <?php
  $editeurs = DB::table('users')->select('name', 'score')->orderBy('score', 'desc')->get();
   foreach ($editeurs as $editeur) {
   echo '<li>' . $editeur->name . '</li>' .
        '<li>' . $editeur->score . '</li><br/>';
  }
 ?>
 </ul>
@endsection