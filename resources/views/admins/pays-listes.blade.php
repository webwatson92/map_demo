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
                  @foreach($listes as $liste)
                  <tr><td>1</td>
                  <td>{{ $liste->name }}</td>
                  <td>{{ $liste->image_pays }}</td>
                  <td>{{ $liste->population }}</td>
                  <td>{{ $liste->capital }}</td>
                  <td>{{ $liste->superficie }}</td>
                  <td>{{ $liste->situation_economique }}</td>
                  <td>
                      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                          <ul class="nav navbar-nav">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li class="active"><a href="{{ route('admin_pays') }}">Ajouter un nouveau pays</a></li>
                                <li><a href="{{ route('modifier_pays_get', [$liste->id]) }}">Modifier module</a>
                                <li class=""><a href="{{ route('supprimer_pays', [$liste->id]) }}">Supprimer le pays</a></li>
                                </li>
                              </ul>
                            </li>
                          </ul>
                      </div>
                  </td></tr>
                  @endforeach
                </tbody>
            </table>                                              
                  <button style="margin-top: 1.3em;margin-top: 2.5em" class="pull-right btn btn-info"><a href="{{ route('admin_pays') }}">Ajouter un pays</a></button>
          </div>
            
        </div>
  </div>
  <!-- /.content-wrapper -->
@include('admins/partials/admin_footer')