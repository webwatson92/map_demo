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
    			<h1>Enregistrement de la ville</h1>
    			<form action="{{ route('ajouter_ville')}}" method="post" class="col-sm-8">
           {{ csrf_field() }}
    					<div class="form-group">
    					    <label for="control-label">Nom</label>
    						<input class="form-control" required autofocus placeholder="Nom de la ville" type="text" name="name">
    					</div>
              <div class="form-group">
                  <label for="control-label">Nom</label>
                  <select class="form-control" name="pays_id">
                      @foreach($pay as $pays)
                          <option value="{{ $pays->id }}">{{ $pays->name }}</option> 
                      @endforeach     
                  </select>
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