@extends('layouts/app', ['title' => 'Connexion']) 

@section('content')

<div class="container">
    <div class="row"> 
        <div class="col-sm-6">
                <div class="row"> 
                     <p style="margin-top: 10px;font-size: 1.5em" class="acceuil">Avec {{config('app.name')}},  restez en contact avec toutes <br>  les universités et grandes écoles de l'afrique.</p>
                </div>
                <div class="row">
                     <img style="width: 30em" src="img/iphone6-3.jpg">
                </div>  
        </div>
        <div class="col-sm-6">
              <div class="row">
      <div class="">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Connectez-vous !</h3>
        </div>
          <div class="panel-body">
            <form accept-charset="UTF-8" role="form" action="{{ route('login') }}" method="POST">
              <fieldset>

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
                <div class="checkbox">
                  <label>
                    <input name="remember" type="checkbox" value="Remember Me"> Se souvenir de moi
                   <input type="hidden" name="_token" value="{{ Session::token() }}">

                  </label>
                </div>
              <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
            </fieldset>
          </form>
                      <hr/>
                    <center><h4>Ou</h4></center>
                    <input class="btn btn-primary btn-lg btn-facebook btn-block" type="submit" value="Connexion via facebook">
          </div>
      </div>
        </div>
    </div>
</div>

@stop