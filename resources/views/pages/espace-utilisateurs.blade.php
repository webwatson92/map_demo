@extends('layouts/app', ['title' => 'Espace-utilisateur']) 

{{--@include('layout/partials/_nav')--}}
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-6 col-xl-6 col-lg-6 col-xs-6">
			<div class="panel panel-primary">
                        <div class="panel-heading" style="font-size:3px;">
                          <h5 class="panel-title text-center">Inscrivez-vous, C'est gratuis à vie !</h5>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="control-label">Pseudo</label>
                                <input class="form-control" placeholder="Entrer un Pseudo" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="control-label">Email</label>
                                <input class="form-control" placeholder="exemple@gmail.com" type="email" name="">
                            </div>
                            <div class="form-group">
                                <label for="control-label">Mot de passe</label>
                                <input class="form-control" placeholder="Mot de passe" type="password" name="">
                            </div>
                            <div class="text-center panel-footer">
                                <input type="submit" class="form-control btn btn-primary" name="register" value="Inscription">
                            </div>
                        </div>
            </div>
		</div>
		<div class="col-sm-6 col-md-6 col-xl-6 col-lg-6 col-xs-6">
			<div class="panel panel-primary">
                        <div class="panel-heading" style="font-size:3px;">
                          <h5 class="panel-title text-center">Je me connecte ici</h5>
                        </div>
                        <div class="panel-body">
                             <div class="form-group">
                                <label for="control-label">Pseudo</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="control-label">Mot de passe</label>
                                <input class="form-control" type="password" name="">
                            </div>
                             <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" name="login" value="Connexion">
                            </div>
                        </div>
            </div>
		</div>	
	</div>
</div>
	


@stop
