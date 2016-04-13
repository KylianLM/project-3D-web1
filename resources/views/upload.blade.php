@extends('layouts.app')

@section('content')
    <h1>hello</h1>
    {{ Form::open(array('url'=>'upload  ','files'=>true)) }}
    {!! Form::file('image') !!}
    {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
    {!! Form::close() !!}
@endsection
