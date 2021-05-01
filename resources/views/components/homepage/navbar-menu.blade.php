<!-- Navbar -->
<nav class="navbar navbar-primary navbar-expand-lg px-0">

    <div class="navleft navbar mr-auto pl-0 py-0">
        <div class="navbar-brand navbrand-homepage d-flex flex-column text-white rounded-lg mr-0 px-2 flex-column text-center" data-toggle="collapse">
            <span class="px-2 d-sm-inline mt-1"><a href="{{ url('/') }}">HorokNiaga</a></span>
        </div>

        <form class="inline-flex searchhomepage">
            <input class="form-control" type="search" placeholder="Mau cari apa?" aria-label="Search">
            <button class="btn btn-dark" type="submit">Cari</button>
        </form>

        @if(Route::has('login'))
            @auth
            @else
                <!-- account toggle -->
                    <button class="navbar-toggler account-auth-toggler" type="button" data-toggle="collapse" data-target="#account"
                            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-user"></i>
                    </button>
                @endauth
            @endif
    </div>

    <div class="navright navbar navbar-right 2xl:max-w-sm p-0">
        @if(Route::has('login'))
            @auth
                <a href="#"class="nav-link d-flex flex-column text-white rounded-lg px-2 flex-column text-center" data-toggle="collapse">
                    <span class="fas fa-heart fa-lg"></span>
                    <span class="navright-text px-2 d-none d-sm-inline mt-1">Favorit</span>
                </a>
                <a href="#" class="nav-link d-flex flex-column text-white rounded-lg px-2 flex-column text-center" data-toggle="collapse">
                    <span class="fas fa-bell fa-lg"></span>
                    <span class="navright-text px-2 d-none d-sm-inline mt-1">Notifikasi</span>
                </a>
                <a href="#" class="nav-link d-flex flex-column text-white rounded-lg px-2 flex-column text-center" data-toggle="collapse">
                    <span class="fas fa-envelope fa-lg"></span>
                    <span class="navright-text px-2 d-none d-sm-inline mt-1">Pesan</span>
                </a>
                <!-- Profile -->
                <div class="inline-block px-2.5 py-1">
                    <x-jet-dropdown class="dropdownprofile text-white" align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                    <img class="h-8 w-8 mr-1.5 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    <div class="ml-0.5 mr-1 my-auto"><i class="fas fa-caret-down"></i></div>
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>
                        <x-slot name="content">
                            <div class="dropdownprofile">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Halo ,
                                    <div class="text-white text-lg font-bold font-thin">
                                        {{ Auth::user()->name }}
                                    </div>
                                </div>

                                <div class="border-t border-gray-100"></div>

                                <x-jet-dropdown-link href="{{ route('dashboard') }}"
                                                     style="text-decoration: none; font-weight: bold;"
                                class="profilehome">
                                    <i class="fas fa-user-cog">&emsp;</i>
                                    {{ __('Dashboard') }}
                                </x-jet-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                        this.closest('form').submit();"
                                                         class="logoutfrhome">
                                        <i class="fas fa-sign-out-alt">&emsp;&nbsp;&nbsp;{{ __('Keluar') }}</i>
                                    </x-jet-dropdown-link>
                                </form>
                            </div>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            @else
                <div class="collapse btn-auth-guest navbar-collapse" id="account">
                    <ul class="navbar-nav btn-auth ml-auto text-center inline-block">
                        @if (Route::has('login'))
                            @auth
                            @else
                                <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-masuk w-full">Masuk</a>
                                </li>
                                <li class="py-1 px-1">
                                    <div class="border-t border-transparent"></div>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item reg-btn"><a href="{{ route('register') }}" class="btn btn-daftar w-full">Mendaftar</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            @endauth
        @endif
    </div>

</nav>
