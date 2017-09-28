@extends('layouts/app', ['title' => 'Contact']) 
@include('layout/partials/_nav')
@section('content')

<style>
	#message{resize: none;}
</style>
<div class="container">
	<div class="col-sm-8 col-offset-4">
		<h1 class="text-center">Contact</h1>
	<form method="post" action="{{ route('contacts.store') }}">
                            {{ csrf_field() }}
                <div class="form-group" {{ $errors->has('email') ? 'has-error' : '' }}>
                	<label for="name">Nom</label>
                    <input id="name" class="form-control" placeholder="@lang('Your name')" type="text" class="full-width"  name="name" value="{{ old('name') }}" required autofocus>            
                    @if ($errors->has('name'))
                        @component('front.components.error')
                       		 {{ $errors->first('name') }}
                        @endcomponent
                    @endif 
                </div>
                <div class="form-group" {{ $errors->has('email') ? 'has-error' : '' }}>
                	<label for="name">Email</label>
                    <input id="email" class="form-control"	placeholder="@lang('Your email')" type="email" class="full-width"  name="email" value="{{ old('email') }}" required>
                	@if ($errors->has('email'))
                        @component('front.components.error')
                            {{ $errors->first('email') }}
                        @endcomponent
                    @endif 
                </div>
                <div class="form-group" {{ $errors->has('email') ? 'has-error' : '' }}>
                	<label for="name">Message</label>
                	@if ($errors->has('message'))
                        @component('front.components.error')
                            {{ $errors->first('message') }}
                        @endcomponent
                    @endif 
                    <textarea name="message" class="form-control" id="message" class="full-width" placeholder="@lang('Your message')" ></textarea>
                </div>
				    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="submit btn btn-primary full-width-on-mobile">Envoyer</button>
  				  </form> <!-- end form -->
	</div>
</div>

@stop