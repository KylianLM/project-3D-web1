@extends('layouts.app')
@section('linkrel')
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleLogin.css')}}"/>
@endsection
@section('content')
<div class="container">
    <h1>Connexion</h1>
    <p>Devenez un pilote à bord de votre avion</p>
    <div id="centrage_bloc">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">E-Mail Address</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Password</label>
                    <input type="password" class="form-control" name="password">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <label>
                    <input type="checkbox" name="remember" class="rememberMe"> Remember Me
                </label>

                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-sign-in"></i>Login
                </button>

                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </form>
        </div>
        <div id="redirectionInscription">
            <div id="centrage_contenu">
                <p>Vous n'avez pas de compte</p>
                <button>Créer un compte</button>
            </div>
        </div>
    </div>
</div>
@endsection
