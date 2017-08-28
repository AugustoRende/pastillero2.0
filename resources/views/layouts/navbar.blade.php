<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top menu">
    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
    
    <div class="navbar-collapse collapse pull-right" id="navbarCollapse" aria-expanded="false">
        <ul class="navbar-nav mr-auto">
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="#">Médicos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/user') }}">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Administradores</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
