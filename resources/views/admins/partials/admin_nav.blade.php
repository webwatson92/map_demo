
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i>En ligne</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Tableau de bord</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('listes_pays') }}"><i class="fa fa-circle-o"></i>Liste des pays</a></li>
            <li><a href="{{ route('listes_ville') }}"><i class="fa fa-circle-o"></i>Liste des villes</a></li>
            <li><a href="{{ route('listes_ecole') }}"><i class="fa fa-circle-o"></i>Liste des écoles</a></li>
            <li><a href="{{ route('listes_filiere') }}"><i class="fa fa-circle-o"></i>Filières</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i>Ecoles
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('ajouter_ecole') }}"><i class="fa fa-circle-o"></i>Universités Privé</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i>Grandes écoles
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="{{ route('stat_page') }}"><i class="fa fa-circle-o"></i>Statistique</a></li>
            <li><a href="{{ route('message') }}"><i class="fa fa-circle-o"></i>Messages des utilisateurs</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Reglages</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>