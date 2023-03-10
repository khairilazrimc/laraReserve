<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="font-sans antialiased bg-gray-100 dark-mode:bg-gray-900">
    <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
      <div @click.away="open = false"
        class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800" x-data="{ open: false }">
        <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
          <a href="/admin" class="text-lg font-semibold tracking-widest text-gray-900 uppercase dark-mode:text-white focus:outline-none focus:shadow-outline">LaraReserve</a>
          <button class="md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
              <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <nav :class="{'block': open, 'hidden': !open}" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
            
          <!-- Side Bar Buttons -->
          <x-admin-nav-link :href="route('admin.categories.index')" :active="request()->routeIs(['admin.categories.index', 'admin.categories.create', 'admin.categories.edit'])">
            {{ __('Categories') }}
          </x-admin-nav-link>
          <x-admin-nav-link :href="route('admin.menus.index')" :active="request()->routeIs(['admin.menus.index', 'admin.menus.create', 'admin.menus.edit'])">
            {{ __('Menus') }}
          </x-admin-nav-link>
          <x-admin-nav-link :href="route('admin.tables.index')" :active="request()->routeIs(['admin.tables.index', 'admin.tables.create', 'admin.tables.edit'])">
            {{ __('Tables') }}
          </x-admin-nav-link>
          <x-admin-nav-link :href="route('admin.reservations.index')" :active="request()->routeIs(['admin.reservations.index', 'admin.reservations.create', 'admin.reservations.edit'])">
            {{ __('Reservations') }}
          </x-admin-nav-link>
          
          <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button 
              @click="open = !open"
              class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
              <span>{{ Auth::user()->name }}</span>
              <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div 
              x-show="open"
              x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="transform opacity-100 scale-100"
              x-transition:leave-end="transform opacity-0 scale-95"
              class="absolute right-0 w-full mt-2 origin-top-right shadow-md">
              <div class="px-2 py-2 bg-white shadow dark-mode:bg-gray-700">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault(); this.closest('form').submit();"
                    class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    {{ __('Log Out') }}
                  </x-dropdown-link>
                </form>
              </div>
            </div>
          </div>

          @if (session()->has('success'))
            <div class="relative bg-white py-2 px-0 mt-20 shadow-md ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:px-10">
              <div class="mx-auto max-w-md">
                <p class="flex place-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-green-600 w-12 h-12"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </p>
                <p class="text-center">
                  {{ session()->get('success') }}
                </p>
              </div>
            </div>
          @endif

          @if (session()->has('warning'))
          <div class="relative bg-white py-2 px-0 mt-20 shadow-md ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:px-10">
            <div class="mx-auto max-w-md">
              <p class="flex place-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-yellow-600 w-12 h-12">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                </svg>
              </p>
              <p class="text-center">
                {{ session()->get('warning') }}
              </p>
            </div>
          </div>
        @endif

        </nav>
      </div>

      <!-- Page Content -->
      <main class="">
        {{ $slot }}
      </main>

    </div>
  </body>
</html>
