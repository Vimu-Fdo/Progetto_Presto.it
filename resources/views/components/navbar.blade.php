<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container px-4">
        <a class="navbar-brand" href="{{ route('home') }}">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                @auth
                <li class="nav-item"><a class="nav-link" href="{{ route('announcements.create') }}">Nuovo annuncio</a></li>
                @endauth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Serie Tv
                  </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Mostra tutte</a></li>
                <li><a class="dropdown-item" href="#">Inserisci serie tv</a></li>
            </ul>
                </li>
                <li class="nav-item dropdown text-white-50">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   @auth 
                    Benvenuto {{ Auth::user()->name }}
                   @else
                    Login / Register
                   @endauth
                    </a>
                    <ul class="dropdown-menu">
                    @auth
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                        <form method="POST" action="{{ route('logout') }}">
                    @csrf
                      <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    @else
                      <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                      <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                    @endauth
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{ $slot }}