<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head> 
<title>{{ isset($title) ? $title. ' | ' : "" }} L'information rapide, fiable et accéssible à tous</title>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="description" content="{{config('app.name') }} est le moyen le plus populaire pour être informer un temps réel de toutes les filières et établissement dans le monde ainsi que toutes les débouchés.">

	<!-- BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/main.css') }}">
	<link rel="shortcut icon" type="icon" href="{{ URL::to('assets/logo.jpg') }}">
	<link rel="shortcut icon" type="icon" href="{{ URL::to('logo.png') }}" />
	<link rel="icon" href="{!! asset('logo.png') !!}">
	
	
	<!--SLIDE PAYS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

	<!--End SLIDE PAYS -->

	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Open sans -->
	 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/leaflet.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.min.css') }}">

		<!-- leaflet -->
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.1.0/dist/leaflet.css"
   integrity="sha512-wcw6ts8Anuw10Mzh9Ytw4pylW8+NAD4ch3lqm9lzAsTxg0GFeJgoAtxuCLREZSC5lUXdVyo/7yfsqFjQ4S+aKw=="
   crossorigin=""/>

	<style>
		body{
			font-family: 'Open Sans', Helvetica, Arial, sans-serif;
		}
		footer{
			margin-top: 4px 0;
		}
	</style>
</head>
<body>


	@yield("content")

	<script src="//code.jquery.com/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/larails.js')}}"></script>
	<script type="text/javascript" src="{{ URL::to('js/leaflet.js') }}"></script>
	<script type="text/javascript" src="{{ URL::to('js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
	<!-- Leaflet -->
    <script src="https://unpkg.com/leaflet@1.1.0/dist/leaflet.js"
   integrity="sha512-mNqn2Wg7tSToJhvHcqfzLMU6J4mkOImSPTxVZAdo+lcPlk+GhZmYgACEe0x35K7YzW1zJ7XyJV/TT1MrdXvMcA=="
   crossorigin=""></script>

	@include('layout/partials/_footer')
</body>
</html>