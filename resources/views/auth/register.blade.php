@extends('layouts.app')
@include('layout/partials/_nav')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6 col-sm-lg">
                <div class="row"> 
                     <p style="margin-top: 10px;font-size: 1.5em" class="acceuil">Avec {{config('app.name')}},  restez en contact avec toutes <br>  les universités et grandes écoles d'ici et d'ailleurs.</p>
                </div>
                <div class="row">
                     <img style="width: 30em" src="img/iphone6-3.jpg">
                </div>  
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6 col-sm-lg">
            <div class="panel panel-default">
                <div class="panel-heading"><h1 class="text-center">Je crée mon compte</h1></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Youssouf">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Addresse E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="monadresse-email@exemple.com" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="................." type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmation du mot de passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="................." type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Je valide mon inscription
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
