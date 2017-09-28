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
            <h1>Modification des infos de {{ $mods->name }}</h1>
          <form action="{{ route('update_ville_post', $mods->id) }}" method="post" class="col-sm-8">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
              <div class="form-group">
                {!! $errors->first('name', '<p class="error">:message</p>') !!}
                  <label for="control-label">Nom de la ville</label>
                 <input class="form-control" type="text" name="name" value="{{ old('name') ?: $mods->name }}">
              </div>
              <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input class="form-control btn btn-primary" type="submit" value="Modifier">
              </div>
          </form>
          </div>
            
        </div>
  </div>
  <!-- /.content-wrapper -->
@include('admins/partials/admin_footer')