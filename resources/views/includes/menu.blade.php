<nav style="border-color:#ffffff; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2), 0 1px 30px 0 rgba(0, 0, 0, 0.19);" class="navbar navbar-expand-lg navbar-static-top navbar-light bg-light">
            <div class="container">

                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar" style="background-color:#000;"></span>
                    <span class="icon-bar" style="background-color:#000;"></span>
                    <span class="icon-bar" style="background-color:#000;"></span>
                </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Engenharia de Software') }}
                    </a>
          
    <div class="collapse navbar-collapse navHeaderCollapse"> 
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Início</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">LINK1</a>
      </li>
   
      
      
      <li class="nav-item">
        <a class="nav-link" href="#">Menu Cliente</a>
      </li>
    

      <li class="nav-item">
        <a class="nav-link" href="#">Menu Supervisor</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre nós</a>
      </li>
    </ul>

                    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
         @if (Auth::guest())
    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                   {{ Auth::user()->name }} 
                </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                        <a href="{{ url('/profile') }}">Perfil</a>
                      </li>
                      <div class="dropdown-divider"></div>
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