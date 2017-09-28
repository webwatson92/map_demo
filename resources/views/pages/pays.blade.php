@extends('layouts/app', ['title' => 'Listes des pays']) 
@include('layout/partials/_nav')
@section('content')

	<div class="container">
		<div class="row">
		<div class="pull-right">
            <input type="search" name="search" class="form-control" placeholder="Rechercher le pays ici......">

		</div>
			   <div class="row">
			   teste2
			      <div id="adv_team_4_columns_carousel" class="carousel slide four_shows_one_move team_columns_carousel_wrapper" data-ride="carousel" data-interval="2000" data-pause="hover">
			         <!--========= Wrapper for slides =========-->
			         <div class="carousel-inner" role="listbox">
			            <!--========= 1st slide =========-->
			            <div class="item">
			               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image">
			                  <img src="http://placehold.it/150x150" alt="slider 01">
			                  <div class="team_columns_item_caption">
			                     @foreach($pays as $pays)
					             <h4>{{ $pays->name }}</h4>
			                     <hr>
					             <h5>{{ $pays->population }}</h5>
					             <img src="{{ URL::to('img/pays/') }}/{{ $pays->image_pays }}" alt="">
					            @endforeach
			                  </div>
			               </div>
			               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-1">
			                  <img src="http://placehold.it/150x150" alt="slider 02">
			                  <div class="team_columns_item_caption">
			                     <h4>Lahore</h4>
			                     <hr>
			                     <h5>PAKISTAN</h5>
			                  </div>
			               </div>
			               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-2">
			                  <img src="http://placehold.it/150x150" alt="slider 02">
			                  <div class="team_columns_item_caption">
			                     <h4>Karachi</h4>
			                     <hr>
			                     <h5>PAKISTAN</h5>
			                  </div>
			               </div>
			               <div class="col-xs-12 col-sm-6 col-md-3 team_columns_item_image cloneditem-3">
			                  <img src="http://placehold.it/150x150" alt="slider 02">
			                  <div class="team_columns_item_caption">
			                     <h4>Lahore</h4>
			                     <hr>
			                     <h5>PAKISTAN</h5>
			                  </div>
			               </div>
			            </div>
			            <!--========= 2nd slide =========-->
			            <div class="item active">
			                
			            </div>
			         </div>
			         <!--======= Navigation Buttons =========-->
			         <!--======= Left Button =========-->
			         <a class="left carousel-control team_columns_carousel_control_left adv_left" href="#adv_team_4_columns_carousel" role="button" data-slide="prev">
			         <span class="fa fa-angle-left team_columns_carousel_control_icons" aria-hidden="true"></span>
			         <span class="sr-only">Précedent</span>
			         </a>
			         <!--======= Right Button =========-->
			         <a class="right carousel-control team_columns_carousel_control_right adv_right" href="#adv_team_4_columns_carousel" role="button" data-slide="next">
			         <span class="fa fa-angle-right team_columns_carousel_control_icons" aria-hidden="true"></span>
			         <span class="sr-only">Suivant</span>
			         </a>
			    </div>
			</div>
		</div>
	</div>   
@stop