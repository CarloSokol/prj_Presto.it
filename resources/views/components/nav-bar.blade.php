<nav class="navbar navbar-expand-lg navbar-light bg-custom shadow-lg">
    <div class="container">

      <a class="navbar-brand" href="#">Presto.it</a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">1. Annunci</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">2. Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">3. Login</a>
          </li>

          @auth
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Benvenuto {{ Auth::user()->name }}
              </a>
          <ul class="dropdown-menu">
          <li class="nav-item">
          <form action="{{ route('logout') }}" id="logout-form" method="POST">
            @csrf
              <button type="submit" class="btn nav-link">Logout</button>
          </form>
          </li>
          </ul>
          </li>
          @endauth
          
        </ul>
      </div>
    </div>
  </nav>