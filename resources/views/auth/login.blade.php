@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
         <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6 col-sm-lg">
                <div class="row"> 
                     <p style="margin-top: 10px;font-size: 1.5em" class="acceuil">Avec {{config('app.name')}},  restez en contact avec toutes <br>  les universités et grandes écoles de l'afrique.</p>
                </div>
                <div class="row">
                     <img style="width: 30em" src="img/iphone6-3.jpg">
                </div>  
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 col-xl-6 col-sm-lg">
            <div class="panel panel-default">
                <div class="panel-heading"><h1 class="text-center">Je me connecte</h1></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group" {{ $errors->has('email') ? 'has-error' : '' }}>
                          <input class="form-control" required autofocus placeholder="monmail@example.com" name="email" type="text">
                                @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                @endif
                        </div>
                                <div class="form-group" {{ $errors->has('password') ? 'has-error' : '' }}>
                          <input class="form-control" placeholder="Mot de passe" {{ Request::old("name") }} name="password" type="password" value="">
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Connexion
                                </button>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Mot de passe oublié ?
                                </a>
                            </div>
                        </div>
                          <hr/>
                    <center><h4>Ou</h4></center>
                     <a href="{{ route('facebook') }}" class="btn btn-primary btn-lg btn-facebook btn-block" name="facebook"><i class="fa fa-facebook lg"></i>&nbsp;Connectez-vous via facebook</a>
                    <div
                      class="fb-login-button"
                      data-share="true"
                      data-width="450"
                      data-show-faces="true">
                    </div>
                </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
