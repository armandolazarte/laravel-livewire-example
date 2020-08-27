<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Livewire') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs(['usuarios-modal*', 'usuarios-registro-login*', 'usuarios-campos-dinamicos*', 'usuarios-paginacion*','usuarios-cargar-mas*','usuarios-buscar-paginacion*','usuarios-crud*']) ? 'active' : '' }}" href="#" id="usuarios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>
                    <div class="dropdown-menu" aria-labelledby="usuarios">
                        <a class="dropdown-item {{ request()->routeIs('usuarios-modal') ? 'active' : '' }}" href="{{ route('usuarios-modal') }}">Modal</a>
                        <a class="dropdown-item {{ request()->routeIs('usuarios-registro-login') ? 'active' : '' }}" href="{{ route('usuarios-registro-login') }}">Registro/Login</a>
                        <a class="dropdown-item {{ request()->routeIs('usuarios-campos-dinamicos') ? 'active' : '' }}" href="{{ route('usuarios-campos-dinamicos') }}">Campos Dinámicos</a>
                        <a class="dropdown-item {{ request()->routeIs('usuarios-paginacion') ? 'active' : '' }}" href="{{ route('usuarios-paginacion') }}">Paginacion</a>
                        <a class="dropdown-item {{ request()->routeIs('usuarios-cargar-mas') ? 'active' : '' }}" href="{{ route('usuarios-cargar-mas') }}">Cargar mas</a>
                        <a class="dropdown-item {{ request()->routeIs('usuarios-buscar-paginacion') ? 'active' : '' }}" href="{{ route('usuarios-buscar-paginacion') }}">Buscar paginacion</a>
                        <a class="dropdown-item {{ request()->routeIs('usuarios-crud') ? 'active' : '' }}" href="{{ route('usuarios-crud') }}">CRUD</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs(['subir-imagen*', 'multiples-imagenes*']) ? 'active' : '' }}" href="#" id="imagenes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Imagenes</a>
                    <div class="dropdown-menu" aria-labelledby="imagenes">
                        <a class="dropdown-item {{ request()->routeIs('subir-imagen') ? 'active' : '' }}" href="{{ route('subir-imagen') }}">Subir Imagen</a>
                        <a class="dropdown-item {{ request()->routeIs('multiples-imagenes') ? 'active' : '' }}" href="{{ route('multiples-imagenes') }}">Subir Multiples Imagen</a>
                    </div>
                </li>
                <li class="nav-item {{ request()->routeIs('subir-archivo') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('subir-archivo') }}">Archivos</a>
                </li>
                <li class="nav-item {{ request()->routeIs('dropdowns') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dropdowns') }}">Dropdowns</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs(['galaxies*', 'modal*']) ? 'active' : '' }}" href="#" id="modales" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Modales</a>
                    <div class="dropdown-menu" aria-labelledby="modales">
                        <a class="dropdown-item {{ request()->routeIs('galaxies') ? 'active' : '' }}" href="{{ route('galaxies') }}">Galaxies</a>
                        <a class="dropdown-item {{ request()->routeIs('modal') ? 'active' : '' }}" href="{{ route('modal') }}">Modal Laravel</a>
                    </div>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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