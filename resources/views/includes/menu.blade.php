<nav style="border-color:#ffffff; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2), 0 1px 30px 0 rgba(0, 0, 0, 0.19);" class="navbar navbar-expand-md navbar-light navbar-laravel">
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
      
      
   
      @auth
      @if(Auth::user()->permissao == 'administrador')
      <li class="nav-item">
        <a class="nav-link" href="#"> Menu Administrador </a>
      </li>
      @endif
      @if(Auth::user()->permissao == 'cliente' || Auth::user()->permissao == 'administrador')
      <li class="nav-item">
        <a class="nav-link" href="#"> Menu Cliente </a>
      </li>
      @endif
      @if(Auth::user()->permissao == 'supervisor' || Auth::user()->permissao == 'administrador')
      <li class="nav-item">
        <a class="nav-link" href="#"> Menu Supervisor </a>
      </li>
      @endif
      @endauth

      
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre nós</a>
      </li>
    </ul>

                    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                           <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nome }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
    </ul>



       
            </div>
            </div>
        </nav>