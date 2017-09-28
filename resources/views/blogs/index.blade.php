@extends('layouts/app', ['title' => 'Blog']) 
@include('layout/partials/_nav')

@section('content')

<div class="container">
	
	<h1>Mon Blog</h1>
	@foreach($posts as $post)
		<a href="{{ route('posts.show', $post->slug) }}">
		<h2>{{ ($post->name) }}</h2>	
		</a>
	@endforeach
	 {{ $posts->links() }}
</div>
@stop