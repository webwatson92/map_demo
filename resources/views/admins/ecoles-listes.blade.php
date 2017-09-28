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
                    <th>Nom Ecole</th>
                    <th>Catégorie</th>
                    <th>lattitude</th>
                    <th>longitude</th>
                    <th>Site internet</th>
                    <th>Id ville</th>
                    <th>Id pays</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($ecoles as $ecole)
                    <tr><td>1</td>
                    <td>{{ $ecole->nom_ecole }}</td>
                    <td>{{ $ecole->categorie_ecole }}</td>
                    <td>{{ $ecole->lattitude }}</td>
                    <td>{{ $ecole->longitude }}</td>
                    <td>{{ $ecole->site_internet }}</td>
                    <td>{{ $ecole->ville_id }}</td>
                    <td>{{ $ecole->pays_id }}</td>
                    <td>
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li class="active"><a href="{{ route('ajouter_ecole') }}">Ajouter</a></li>
                                  <li><a href="{{ route('update_ecole_get', [$ecole->id]) }}">Modifier</a>
                                  <li class=""><a href="{{ route('supprimer_ecole', [$ecole->id]) }}">Supprimer le pays</a></li>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                        </div>
                    </td></tr>
                    @endforeach
                </tbody>
            </table>
              <button style="margin-top: 1.3em" class="pull-right btn btn-info"><a href="{{ route('ajouter_ecole') }}">Ajouter une école</a></button>
          </div>

        </div>
  </div>
  <!-- /.content-wrapper -->
@include('admins/partials/admin_footer')