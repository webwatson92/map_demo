  <nav class="navbar navbar-primary navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'SouklouMap') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Connexion</a></li>
                            <li><a href="{{ route('register') }}">Inscription</a></li>
                        @else
                            <li class="pull-left">    
                                       
                                        <li class="dropdown">
                                            <a href="{{ route('pays') }}">Pays</a>
                                            {{-- <ul class="dropdown-menu">
                                                <li class="dropdown">
                                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Villes</a>
                                                     <ul class="dropdown-menu">
                                                        <li class="dropdown">
                                                            <li><a href="#">Grandes écoles</a></li>
                                                            <li><a href="#">Universités Privé</a></li>
                                                            <li><a href="#">Universités Publique</a></li>
                                                        </li>
                                                    </ul> 
                                                </li>
                                            </ul>   --}}
                                        </li>
                                    <li><a href="">Offres d'emplois</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                            </li>  
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}<span class="caret"></span>
                                </a>
                                
                                <ul class="dropdown-menu" role="menu">
                                    <!--<li class="divider"></li>-->
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
