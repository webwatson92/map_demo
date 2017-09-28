@include('admins/partials/admin_header')
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
@include('admins/partials/admin_nav')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-bordered table-striped col-sm-8">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Image du module</th> 
                    <th>Population</th>
                    <th>Capital</th>
                    <th>Superficie</th>
                    <th>Situation économique</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($ecole as $e)
                  @foreach($e->filieres as $f)
                  <tr><td>1</td>
                  <td>{{ $f->nom_filiere }}</td>
                  <td>{{ $e->nom_ecole }}</td>
                  <td>
                      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                          <ul class="nav navbar-nav">
                            <li class="dropdown">
                              <a href"#" class="dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li class="active"><a href="{{ route('admin_filiere') }}">Ajouter un nouveau pays</a></li>
                                <li><a href="">Modifier module</a>
                                <li class=""><a href="">Supprimer le pays</a></li>
                                </li>
                              </ul>
                            </li>
                          </ul>
                      </div>
                  </td></tr>
                  @endforeach
                @endforeach
                </tbody>
            </table>                                              
                  <button style="margin-top: 1.3em;margin-top: 2.5em" class="pull-right btn btn-info"><a href="{{ route('admin_filiere') }}">Ajouter un pays</a></button>
          </div>
            
        </div>
  </div>
  <!-- /.content-wrapper -->
@include('admins/partials/admin_footer')