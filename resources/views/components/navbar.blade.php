<nav class="navbar navbar-expand-lg navbar-dark bgN fixed-top" id="mainNav">
    <div class="container px-4">
        <a class="navbar-brand" href="{{ route('home') }}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('announcement.index') }}">Annunci</a></li>
                @auth
                <li class="nav-item"><a class="nav-link" href="{{ route('announcements.create') }}">Crea annuncio</a></li>
                @endauth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" id="categoriesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie annunci
                  </a>
            <ul class="dropdown-menu">
              @foreach ($categories as $category)
                <li><a class="dropdown-item" href="{{ route('categories.show', compact('category')) }}">{{ $category->name }}</a></li>
              @endforeach
            </ul>
              {{--   </li>
                @if(Auth::user() && Auth::user()->is_revisor) 
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('revisor.index') }}">Zona Revisore
                    <span class="position-absolute top-5 start-55 translate-middle badge rounded-pill bg-danger">
                      {{ App\Models\Announcement::toBeRevisionedCount() }}
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </a>
                </li>
                @endif --}}
                <li class="nav-item dropdown text-white-50">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   @auth 
                   <i class="fa-solid fa-user" style="color: #e8eaed;"></i>
                    {{ Auth::user()->name }}
                   @else
                   <i class="fa-solid fa-user" style="color: #e8eaed;"></i>
                   @endauth
                    </a>
                    <ul class="dropdown-menu">
                    @auth
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    @if(Auth::user() && Auth::user()->is_revisor) 
                      <li class="dropdown-item">
                        <a class="text-decoration-none text-black" href="{{ route('revisor.index') }}">Zona Revisore
                          @if(App\Models\Announcement::toBeRevisionedCount() > 0)
                          <span class="position-absolute top-5 start-55 translate-middle badge rounded-pill bg-danger">
                            {{ App\Models\Announcement::toBeRevisionedCount() }}
                            <span class="visually-hidden text-black">unread messages</span>
                          </span>
                          @endif
                        </a>
                      </li>
                    @endif
                        <form method="POST" action="{{ route('logout') }}">
                    @csrf
                      <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    @else
                      <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                      <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                    @endauth
                    </ul>

                    <li class="nav-item dropdown">
                      <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-globe" style="color: #e8eaed;"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"></a> <x-_locale lang="it" /> </li>
                        <li><a class="dropdown-item" href="#"></a> <x-_locale lang="en" /> </li>
                        <li><a class="dropdown-item" href="#"></a> <x-_locale lang="es" /> </li>
                      </ul>
                    </li>
                </li>
               
            </ul>
        </div>
    </div>
</nav>
{{ $slot }}



{{--
@auth e middleware 
Abbiamo inserito un @auth per verificare se l'utente è loggato puoi accedere alla pagina di creazione di un nuovo annuncio.
Abbiamo inserito anche un middleware per una questione di sicurezza cosi da non permettere l'accesso tramite url alla pagina di creazione di un nuovo annuncio. 

Categorie dropdown
Abbiamo inserito un dropdown per le categorie degli annunci. Abbiamo utilizzato un @foreach per ciclare le categorie e stamparle a schermo.

Login / Register
Abbiamo inserito un dropdown per il login e la registrazione. Abbiamo utilizzato un @auth per verificare se l'utente è loggato e stampare a schermo il suo nome. Se l'utente non è loggato verrà mostrato il link per il login e la registrazione.

Register
Appena l'utente si registra verrà reindirizzato alla pagina di inserimento di un nuovo annuncio.

@csrf
Abbiamo utilizzato la funzione @csrf per proteggere il nostro form dal CSRF (Cross-Site Request Forgery).


  --}}