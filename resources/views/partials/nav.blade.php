    <!-- Navbar -->
<header class="absolute top-0 left-0 w-full z-20">
  <nav class="bg-transparent">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <!-- Logo -->
      <a href="/" class="flex items-center space-x-2">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16">
      </a>

      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-8 text-white font-medium">
        <a href="/chat" class="hover:text-amber-400 transition">Chat Ai</a>
      <a href="/sejarah" class="hover:text-amber-400 transition">Sejarah</a>
        <a href="/budaya" class="hover:text-amber-400 transition">Budaya</a>
        <a href="/events" class="hover:text-amber-400 transition">Event</a>
        @auth
                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-[#123B32] hover:text-white focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content" >
                        <x-dropdown-link :href="route('dashboard')">
                            {{ __('Dashboard') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        @else
        <a href="/login" class="bg-green-700 hover:bg-green-800 px-4 py-2 rounded-lg transition">Login</a>
        <a href="/register" class="hover:text-amber-400 transition">Register</a>
        @endauth
      </div>

      <!-- Mobile Menu Button -->
      <button id="menu-btn" class="md:hidden text-white focus:outline-none">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-black/90 text-white px-6 py-4 space-y-4">
        <a href="/chat" class="hover:text-amber-400 transition">Chat Ai</a>
      <a href="/sejarah" class="block hover:text-amber-400">Sejarah</a>
      <a href="/budaya" class="block hover:text-amber-400">Budaya</a>
      <a href="/events" class="block hover:text-amber-400">Event</a>
      @auth
              <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
      @else
      <a href="/login" class="block bg-green-700 hover:bg-green-800 px-4 py-2 rounded-lg text-center">Login</a>
      <a href="/register" class="block hover:text-amber-400">Register</a>
      @endauth
    </div>
  </nav>
</header>

<script>
  // Toggle Mobile Menu
  const menuBtn = document.getElementById("menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });
</script>

