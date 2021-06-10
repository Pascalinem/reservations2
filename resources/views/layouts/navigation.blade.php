<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Projet réservation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('artist') }}">Artist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('locality') }}">Locality</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('role') }}">Role</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('location') }}">Location</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('show') }}">Show</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('representation') }}">Representation</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Type
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('type') }}">List type</a>
          <a class="dropdown-item" href="{{ url('type/create') }}">Create type</a>          
        </div>
      </li>
      <span class="form-inline my-2 my-lg-0">
        @auth
            <li class="nav-item">
                <a class="nav-item" href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                  onclick="event.preventDefault();
                  this.closest('form').submit();">
                  {{ __('Log out') }}
                </x-responsive-nav-link>
              </form>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-item" href="{{ route('login') }}">Log in</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-item" href="{{ route('register') }}">Register</a>
            </li>
            @endif
        @endauth
        </span>
    </ul>
    
  </div>
</nav>