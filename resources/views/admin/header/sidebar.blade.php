<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark text-white" style="width: 250px; min-height: 100vh;">
    <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-warning text-decoration-none fw-bold fs-4">
        Admin Menu
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}"
               class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active text-warning bg-secondary' : 'text-white' }}">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('admin-users') }}"
               class="nav-link {{ request()->routeIs('admin-users') ? 'active text-warning bg-secondary' : 'text-white' }}">
                <i class="bi bi-person me-2"></i> Users
            </a>
        </li>
        <li>
            <a href="{{ route('admin-genres') }}"
               class="nav-link {{ request()->routeIs('admin-genres') ? 'active text-warning bg-secondary' : 'text-white' }}">
                <i class="bi bi-tv me-2"></i> Genres
            </a>
        </li>
        <li>
            <a href="{{ route('admin-movies') }}"
               class="nav-link {{ request()->routeIs('admin-movies') ? 'active text-warning bg-secondary' : 'text-white' }}">
                <i class="bi bi-film me-2"></i> Movies
            </a>
        </li>
    </ul>
    <hr>
</div>
