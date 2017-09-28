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
    			<h1>Enregistrement Filière (Diplôme ) des écoles</h1>
    			<form action="{{ route('ajouter_pays')}}" method="post" class="col-sm-8">
           {{ csrf_field() }}
    					<div class="form-group">
    					    <label for="control-label">Nom de l'école</label>
    						<input class="form-control" required autofocus placeholder="Nom du pays" type="text" name="nom_ecole">
    					</div>
    					<div class="form-group">
                  <label for="control-label">Nom</label>
                  <select class="form-control" name="pays_id">
                      @foreach($filieres as $f)
                          <option value="{{ $f->id }}">{{ $f->nom_ecole }}</option> 
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