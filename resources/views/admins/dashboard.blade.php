@include('admins/partials/admin_header')
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
@include('admins/partials/admin_nav')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bienvenue
        <small>Gestion des information</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{ config('app.namep') }}</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
          <div class="col-sm-6">
             <h2>{{ count($users) }} Utilisateurs inscrit</h2>
             <table class="table table-bordered table-striped col-sm-8">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>E-mail</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr><td>1</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">{{ $users->links() }}</div>
          </div>
          <div class="col-sm-6">
            <h2>Statistique</h2>
          </div>
        </div>
        <!-- /.box-body -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('admins/partials/admin_footer')