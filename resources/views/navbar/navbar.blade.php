<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">Jets Cell</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Toko") ? 'active' : '' }}"  href="/"><i class="bi bi-shop"></i> Toko</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Profil") ? 'active' : '' }}" href="/profil"><i class="bi bi-person-lines-fill"></i> Profil</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Wellcome, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashborad</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                   <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <li class="nav-item">
              <a href="/login" class="nav-link"><i class="bi bi-box-arrow-right"></i> Login</a>
          </li>
        </ul>
          @endauth
      </div>
    </div>
  </nav>