<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">DC Comics</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('comics.index') }}">Comics <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'comics.create' ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('comics.create') }}">Create <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> --}}
        </div>
      </nav>
</header>