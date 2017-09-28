@extends('layout/default', ['title' => 'Contact']) 

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<h2>Get In touch</h2>
			<p class="text-muted">Si vous voulez des explication envoyer moi un <a href="mailto:webwatson92@gmail.com">mail</a></p>

			<form action="{{ route('contact_path') }}" method="POST" novalidate>
			{{ csrf_field() }}
			<div class="form-group {{ $errors->has('name') ? 'has-error': '' }}">
				<label class="control-label">Nom</label>
				<input class="form-control" type="text" id="name" name="name" required="required">
				{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
			</div>

			<div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
				<label class="control-label">email</label>
				<input class="form-control" type="email" id="email" name="email" required="required">
				{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {{ $errors->has('message') ? 'has-error': '' }}">
				<label class="control-label sr-only">Message</label>
				<textarea cols="10" rows="10" class="form-control" name="message" required="required" id="message"></textarea>
				{!! $errors->first('message', '<span class="help-block">:message</span>') !!}
			</div>
			<div class="form-group {{ $errors->has('name') ? 'has-error': '' }}">
				<button type="submit" class="form-control btn btn-primary">Send your message &raquo;</button> 
			</div>
		</form>
		</div>

		
	</div>
	
</div>
@stop