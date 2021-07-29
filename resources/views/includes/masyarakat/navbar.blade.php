<header class="z-10 py-4 bg-blue-400 shadow-md dark:bg-gray-800">
  <div class="container flex items-center justify-end h-full px-6 mx-auto text-blue-400 dark:text-purple-300">
    <!-- Mobile hamburger -->
    <button class=" p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-pink"
      @click="toggleSideMenu" aria-label="Menu">
    </button>
    <nav>
    </nav>
    <div class="flex justify-center flex-1">
      <a class="inline-flex items-center text-sm mr-5 font-bold transition-colors duration-150 "
        href="{{ url('user')}}">

        <span class="ml-4">Dashboard</span>
      </a>
      <a class="inline-flex items-center text-sm mr-5 font-bold transition-colors duration-150 "
        href="{{ url('user/pengaduan')}} ">

        <span class="ml-4">Pengaduan Anda</span>
      </a>
      {{-- <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open"
          class="inline-flex items-center  text-sm mr-5 font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
          <span>Pengaduan</span>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100"
          x-transition:enter-start="transform opacity-0 scale-95"
          x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
          x-transition:leave-start="transform opacity-100 scale-100"
          x-transition:leave-end="transform opacity-0 scale-95"
          class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
          <div class="px-2 py-2 dark:bg-gray-800 bg-white rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-purple-600 dark:text-gray-100"
              href="#">Link #1</a>
          </div>
        </div>
      </div> --}}
    </div>
    <ul class="flex items-center flex-shrink-2 space-x-6">
        </button>
      </li>
      <li class="flex">
        <p>{{ Auth::user()->name }} </p>
      </li>
      <!-- Menu Profil-->
      <li class="relative">
        <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
          @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
          <img class="object-cover w-8 h-8 rounded-full" src="{{ asset('img/asn.png')}}"
            alt="" aria-hidden="true" />
        </button>
        <template x-if="isProfileMenuOpen">
          <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu"
            class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
            aria-label="submenu">
            <li class="flex">
              <form method="POST" action="{{ route('logout') }}"
                class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                @csrf
                <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                  href="{{ route('logout') }} " onclick="event.preventDefault();
                                                      this.closest('form').submit();">
                    <path
                      d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                    </path>
                  <span>Log out</span>
                </a>
              </form>
            </li>
          </ul>
        </template>
      </li>
    </ul>
  </div>
</header>