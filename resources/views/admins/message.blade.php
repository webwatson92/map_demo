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
             <h1 class="text-center">Message des utilisateurs</h1>
               <table class="table table-bordered table-striped col-sm-8">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>email</th>
                    <th>Message</th>
                  </tr>          
                </thead>
                <tbody>
                     @foreach($messages as $message)
                      <tr><td>#</td>
                      <td>{{$message->name}}</td>
                      <td>{{$message->email}}</td>
                      <td>{{$message->message}}</td></tr>
                  @endforeach
                </tbody>
            </table>
                  <div class="text-center">{{ $messages->links() }}</div>
          </div>
            
        </div>
  </div>
  <!-- /.content-wrapper -->
@include('admins/partials/admin_footer')