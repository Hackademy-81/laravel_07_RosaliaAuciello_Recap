<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homePage')}}">Home</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Registrati</a>
          </li>
          @endguest
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu bg-warning">
              <li><a class="dropdown-item" href="{{route('article.create')}}">Inserisci Articolo</a></li>
              <li><a class="dropdown-item" href="{{route('article.user')}}">I miei articoli</a></li>
              <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a></li>
              <form action="{{route('logout')}}" method="POST" class="d-none" id="logout-form">@csrf</form>
            </ul>
          </li>                       
          @endauth
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact.us')}}">Contattaci</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>