<!-- HEADER -->
<header class="bg-white shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <h1 class="text-2xl font-bold text-blue-600">MyWebsite</h1>

      <!-- Desktop Menu -->
      <nav class="hidden md:flex space-x-6">
        <a href="{{ route('home') }}" class="hover:text-blue-500 {{ request()->is('/') ? 'text-blue-600 font-semibold' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="hover:text-blue-500 {{ request()->is('about') ? 'text-blue-600 font-semibold' : '' }}">About</a>
        <a href="{{ route('news') }}" class="hover:text-blue-500 {{ request()->is('news') ? 'text-blue-600 font-semibold' : '' }}">News</a>
        <a href="{{ route('contact') }}" class="hover:text-blue-500 {{ request()->is('contact') ? 'text-blue-600 font-semibold' : '' }}">Contact</a>
      </nav>

      <!-- Mobile menu button -->
      <button id="menu-btn" class="md:hidden focus:outline-none">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden px-4 pb-4 hidden">
    <a href="{{ route('home') }}" class="block py-2 hover:text-blue-500 {{ request()->is('/') ? 'text-blue-600 font-semibold' : '' }}">Home</a>
    <a href="{{ route('about') }}" class="block py-2 hover:text-blue-500 {{ request()->is('about') ? 'text-blue-600 font-semibold' : '' }}">About</a>
    <a href="{{ route('news') }}" class="block py-2 hover:text-blue-500 {{ request()->is('news') ? 'text-blue-600 font-semibold' : '' }}">News</a>
    <a href="{{ route('contact') }}" class="block py-2 hover:text-blue-500 {{ request()->is('contact') ? 'text-blue-600 font-semibold' : '' }}">Contact</a>
  </div>
</header>
