@extends('layouts/app', ['title' => 'Inscription']) 

@section('content')

<div class="container">
	
	<div class="row">
            <div class="">
                  <form data-parsley-validate class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3 col-xm-12 well" autocomplete="off" action="{{ route('register') }}"  method="post" >
                  {{ csrf_field() }}
                 	 <legend class="text-center">Inscrivez-vous maintenant! C'est gratuit... <span><img src="{{ URL::to("fonts/module1/mascote2.PNG")}}" class="avatar-md"></span></legend>
                            <ul>
								@foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach
							</ul>
                                
                                <!--identifiant field-->
                 
                  <div class="row radius">             
                      <div class="form-group col-sm-12 {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label class="control-label" for="identifiant">Nom</label>
                       <input id="name" name="name" id="" type="text" class="form-control"  value="{{ Request::old("name") }}" required="required" />
                      </div>
                      <div class="form-group col-sm-12 {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label class="control-label" for="email">Email</label>
                        <input id="email" name="email" id="" type="text" class="form-control"  value="{{ Request::old("email") }}" required="required" />
                     </div>
                                <!--password fild-->
                      <div class="form-group col-sm-12 {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label class="control-label" for="password">Mot de passe</label>
                        <input id="password" name="password" type="password" class="form-control" required="required" />
                      </div>
                  </div>

                

                     <div class="form-group">
                       <button type="submit" class="btn btn-info btn-block" name="register">Je m'inscris</span></button>
      					<input type="hidden" name="_token" value="{{ Session::token() }}">
                    </div>

                  </form>
            </div>
          </div>

@stop