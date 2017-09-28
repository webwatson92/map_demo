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
          <h1>Enregistrement de l'école avec toutes les infos neccessaires</h1>
          <form action="{{ route('ajouter_ecole') }}" method="post" class="col-sm-8">
           {{ csrf_field() }}
              <div class="form-group">
                  {!! $errors->first('nom_ecole', '<p class="error">:message</p>') !!}
                  <label for="control-label">Nom</label>
                <input class="form-control" required autofocus placeholder="Nom du pays" type="text" name="nom_ecole">
              </div>
              <div class="form-group">
                  {!! $errors->first('categorie_ecole', '<p class="error">:message</p>') !!}
                  <label for="control-label">Catégories de l'école</label>
                <input class="form-control" required autofocus placeholder="Grande école | Université privé | Université publique" type="text" name="categorie_ecole">
              </div>
              <div class="form-group">
                  {!! $errors->first('lattitude', '<p class="error">:message</p>') !!}
                  <label for="control-label">Lattitude</label>
                <input class="form-control" required autofocus placeholder="lattitude" type="text" name="lattitude">
              </div>
              <div class="form-group">
                  {!! $errors->first('longitude', '<p class="error">:message</p>') !!}
                  <label for="control-label">longitude</label>
                <input class="form-control" required autofocus placeholder="longitude" type="text" name="longitude">
              </div>
              <div class="form-group">               
                {!! $errors->first('site_internet', '<p class="error">:message</p>') !!}
                <label for="control-label">Site internet</label>
                <input class="form-control" required autofocus placeholder="Site internet" type="text" name="site_internet">
              </div>
              <div class="form-group">
                  {!! $errors->first('superficie', '<p class="error">:message</p>') !!}
                  <label for="control-label">Nom ville</label>
                  <select class="form-control" name="ville_id">
                          <option value="1">id ville</option>     
                  </select>
              </div>
              <div class="form-group">
                {!! $errors->first('superficie', '<p class="error">:message</p>') !!}
                <label for="control-label">Nom pays</label>
                  <select class="form-control" name="pays_id">
                          <option value="1">id pays</option>   
                  </select>
              </div>
              <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input class="form-control btn btn-primary" type="submit" value="Ajout de l'école">
              </div>
          </form>
        </div> 
      </div>
  </div>
  <!-- /.content-wrapper -->
@include('admins/partials/admin_footer')