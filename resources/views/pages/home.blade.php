@extends('layouts/app', ['title' => 'Accueil']) 
@include('layout/partials/_nav')
@section('content')
	<div class="container">

		<section>
			<div class="row">
				<div class="col-sm-4">
					<div class="accueil">
						Bienvenue sur <em>SouklouMap</em>. <br> La plateforme qui regroupe Toute les filières  d'ici et d'ailleurs.
						<div class="row down">
							<a class='btn btn-outline btn-x1 page-scroll' style="font-size: 1em;" href="/index">Commencer la découverte</a>
						</div> 
					</div>
					<p><em>Vous aurai la possiblité de connaitre plus 16 milions d'établissiments Université privé ou public et les grandes écoles d'ici et d'ailleurs.</em></p>
					</div>
				<div class="col-sm-4">
					<img style="width: 30em" src="{{ URL::to('img/iphone6-3.jpg') }}">
				</div>
				<div class="col-sm-4">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Bloc pub -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-3624912069544968"
					     data-ad-slot="9464579951"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			</div>
		</section>
		
	</div>
       
@stop
