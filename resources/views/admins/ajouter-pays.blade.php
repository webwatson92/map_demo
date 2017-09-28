@include('admins/partials/admin_header')
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
@include('admins/partials/admin_nav')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    	
    	<div class="row">
    		<div class="col-sm-12 pull right">
    			<h1>Enregistrement du pays avec toutes les infos neccessaires</h1>
    			<form action="{{ route('ajouter_pays')}}" method="post" class="col-sm-8">
           {{ csrf_field() }}
    					<div class="form-group">
    					    <label for="control-label">Nom</label>
    						<input class="form-control" required autofocus placeholder="Nom du pays" type="text" name="name">
    					</div>
    					<div class="form-group">
    					    <label for="control-label">Image</label>
    						<input class="form-control" type="text" name="image_pays">
    					</div>
    					<div class="form-group">
    	    				<label for="control-label">Population</label>
    						<input class="form-control" required autofocus placeholder="Population" type="text" name="population">
    					</div>
    					<div class="form-group">
    					    <label for="control-label">capital</label>
    						<input class="form-control" required autofocus placeholder="Capital" type="text" name="capital">
    					</div>
    					<div class="form-group">
    					    <label for="control-label">Superficie</label>
    						<input class="form-control" required autofocus placeholder="Superficie" type="text" name="superficie">
    					</div>
    					<div class="form-group">
     					    <label for="control-label">Situation économique</label>
    						<input class="form-control" required autofocus placeholder="Situation économique" type="text" name="situation_economique">
    					</div>

						<div class="form-group">
						    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    						<input class="form-control btn btn-primary" type="submit" value="Enregistrer">
    					</div>
    			</form>
    		</div> 
    	</div>
		
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('admins/partials/admin_footer')