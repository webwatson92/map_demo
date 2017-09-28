@extends('layouts/app', ['title' => 'Accueil']) 

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
                    <img style="width: 30em" src="img/iphone6-3.jpg">
                </div>
                <div class="col-sm-4">
                     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                          <!-- grande affiche -->
                          <ins class="adsbygoogle"
                               style="display:inline-block;width:300px;height:500px"
                               data-ad-client="ca-pub-1980797020367187"
                               data-ad-slot="5029615559"></ins>
                          <script>
                          (adsbygoogle = window.adsbygoogle || []).push({});
                          </script>
                </div>
            </div>
        </section>
        
    </div>
       
@stop
