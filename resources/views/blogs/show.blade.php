@extends('layouts/app', ['title' => 'Blog']) 
@section('content')

<div class="container">


	<h2>{{ ($post->username) }}</h2>
	<p>Posté par:  | {{ $author->name }}
		@if($post->counts_comment ==0 )
			Pas de commentaire
		@elseif($post->counts_comment ==1)
			1 Commentaire
		@else
			{{ ($post->counts_comment) }} Commentaires

		@endif
	</p>
	<p>{{ ($post->content) }}</p>

	<h3>Les commentaires</h3>

	@if($post->counts_comment == 0)
		Pas de commentaire
	@else
		@foreach($comments as $comment)
		<h4>Commentaire posté par {{ $comment->user->name }}</h4>
		<p>{{ $comment->content }}</p>
		@endforeach
	@endif

@stop