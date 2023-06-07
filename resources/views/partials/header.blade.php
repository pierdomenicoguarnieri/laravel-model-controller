<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse justify-content-between" id="navbarNav">

        <div class="pg-left">
          <a class="navbar-brand" href="{{route('home')}}">
            <img src="/logo.png" alt="Logo" width="30" class="d-inline-block align-text-top me-2">
            <span>Movie Boolist</span>
          </a>
        </div>

        <div class="pg-right">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">Lista dei Film</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Route::currentRouteName() === 'contacts' ? 'active' : ''}}" href="{{route('contacts')}}">Contatti</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
