<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container-fluid">
    <a class="navbar-brand text-warning fw-bold" href="{{ route('home') }}">Movies</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active text-warning fw-bold' : '' }}" href="{{ route('home') }}">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active text-warning fw-bold' : '' }}" href="{{ route('admin.dashboard') }}">
            Admin Dashboard
          </a>
        </li>

<li class="nav-item">
    <a class="btn btn-outline-warning btn-sm ms-2 d-flex align-items-center" href="">
        <i class="bi bi-box-arrow-right me-1"></i> Logout
    </a>
</li>


      </ul>
    </div>
  </div>
</nav>
