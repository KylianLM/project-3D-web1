@extends('layouts.app')

@section('content')
 <ul>
 <?php
  $editeurs = DB::table('users')->select('name')->get();
   foreach ($editeurs as $editeur) {
   echo '<li>' . $editeur->name . '</li>';
  }
?>
  <li>hello world</li>
  <li>yolo</li>
 </ul>
@endsection
