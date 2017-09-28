@extends('layouts/app', ['title' => 'About']) 
@include('layout/partials/_nav')
@section('content')

<div class="container">
	
	<h2>What is {{config('app.name')}}?</h2>

	<p><b>Laracarte is a dorie app of <a href="https://laramap.com">Laramap.com.</b></p>

	<div class="row">
		<div class="col-md-6">
			<p class="alert alert-warning">
				<strong><i class="fa fa-exclamation-triangle" arial="true"></i>jh</strong>
			</p>
		</div>
	</div>

	<p>Perl free to help to home the <a href="https://github.com/webwatson92">Source code</a></p>
	<hr>

	<h2>What is Laramap?</h2>
	<p>Laramap is the website by whith {{config('app.name')}} was inpired</p>
	<p>More info <a href="">here</a></p>
	<hr>

	<h2>Which tools and services are used in {{config('app.name')}}?</h2>
	<p>Basicaly it's built en Laravel & bootstrap But there's a bunch of services used for email and other section.</p>

	<ul>
		<li>Laravel</li>
		<li>Boostrap</li>
		<li>Laragon</li>
		<li>Watsonweb</li>
		<li>fsftep</li>
		<li>egboasouklou</li>
	</ul>
</div>

@stop