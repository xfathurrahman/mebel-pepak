<!-- Navbar -->
<nav class="navbar navbar-expand-lg py-0 my-0 navbar-primary">
    <div class="d-flex flex-grow-1">
        <div class="navbar-brand navbrand-homepage text-white rounded-lg text-center">
            <a href="{{url('/')}}"><img src="{{ asset('storage/assets/hn.png') }}" class="navbrand-img" alt="hn"></a>
            <span class="navbrand-text"><a href="{{ url('/') }}">HorokNiaga</a></span>
        </div>

        <form class="my-auto d-inline-block search-main order-1">
            <div class="input-group mt-1">
                <input type="text" class="form-control border border-right-0" placeholder="Mau cari apa hari ini...?">
                <span class="input-group-append">
                    <button class="search-btn btn btn-outline-dark border border-left-0" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </div>
    <div class="navright navbar p-1 m-0">
        @if(Route::has('login'))
            @auth
                <a href="{{ route('products.create') }}" class="rounded-lg" style="text-decoration: none">
                    <div class="navright-item nav-link d-flex flex-column text-white px-2 flex-column text-center" data-toggle="collapse">
                        <span class="fas fa-plus"></span>
                        <span class="navright-text px-2 d-none d-sm-inline mt-1">Jual</span>
                    </div>
                </a>
                <a href="#" class="navright-item nav-link d-flex flex-column text-white rounded-lg px-2 flex-column text-center" data-toggle="collapse">
                    <span class="fas fa-heart fa-lg"></span>
                    <span class="navright-text px-2 d-none d-sm-inline mt-1">Favorit</span>
                </a>
                <a href="#" class="navright-item nav-link d-flex flex-column text-white rounded-lg px-2 flex-column text-center" data-toggle="collapse">
                    <span class="fas fa-bell fa-lg"></span>
                    <span class="navright-text px-2 d-none d-sm-inline mt-1">Notifikasi</span>
                </a>
                <a href="#" class="navright-item nav-link d-flex flex-column text-white rounded-lg px-2 flex-column text-center" data-toggle="collapse">
                    <span class="fas fa-envelope fa-lg"></span>
                    <span class="navright-text px-2 d-none d-sm-inline mt-1">Pesan</span>
                </a>
                <!-- Profile -->
                <div class="inline-block py-1">
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
            <!-- account toggle -->
                <div class="btn-auth-guest">
                    <a href="{{ route('login') }}" class="w-full btn-a">
                        <button class="blob-btn">
                            Masuk
                            <span class="blob-btn__inner">
                                  <span class="blob-btn__blobs">
                                    <span class="blob-btn__blob"></span>
                                    <span class="blob-btn__blob"></span>
                                    <span class="blob-btn__blob"></span>
                                  </span>
                                </span>
                        </button>
                    </a>
                    <div class="py-1 px-1">
                        <div class="border-t border-transparent"></div>
                    </div>
                    <a href="{{ route('register') }}" class="w-full btn-a">
                        <button class="blob-btn">
                            Mendaftar
                            <span class="blob-btn__inner">
                                  <span class="blob-btn__blobs">
                                    <span class="blob-btn__blob"></span>
                                    <span class="blob-btn__blob"></span>
                                    <span class="blob-btn__blob"></span>
                                  </span>
                                </span>
                        </button>
                    </a>
                </div>
            @endauth
        @endif
    </div>
</nav>

{{--<nav class="navbar navbar-primary px-2 navbar-expand-lg inline-flex p-0 justify-content-between">

    <div class="navleft navbar" style="padding: 5px 0 0 0">
        <div class="navbar-brand navbrand-homepage d-flex flex-column text-white rounded-lg ml-1 mr-0 flex-column text-center" data-toggle="collapse">
            <a href="{{url('/')}}"><img src="{{ asset('storage/assets/hn.png') }}" class="navbrand-img" alt="hn"></a>
            <span class="navbrand-text"><a href="{{ url('/') }}">HorokNiaga</a></span>
        </div>

        <div class="py-1 px-1">
            <div class="border-t border-transparent"></div>
        </div>

        <form class="inline-flex">
            <input class="form-control" type="search" placeholder="Mau cari apa?" aria-label="Search">
            <button class="btn btn-dark" type="submit">Cari</button>
        </form>

    </div>

    <div class="navright navbar p-1 m-0">
        @if(Route::has('login'))
            @auth
                <a href="{{ route('products.create') }}" class="rounded-lg" style="text-decoration: none">
                    <div class="navright-item nav-link d-flex flex-column text-white px-2 flex-column text-center" data-toggle="collapse">
                        <span class="fas fa-plus"></span>
                        <span class="navright-text px-2 d-none d-sm-inline mt-1">Jual</span>
                    </div>
                </a>
                <a href="#" class="navright-item nav-link d-flex flex-column text-white rounded-lg px-2 flex-column text-center" data-toggle="collapse">
                    <span class="fas fa-heart fa-lg"></span>
                    <span class="navright-text px-2 d-none d-sm-inline mt-1">Favorit</span>
                </a>
                <a href="#" class="navright-item nav-link d-flex flex-column text-white rounded-lg px-2 flex-column text-center" data-toggle="collapse">
                    <span class="fas fa-bell fa-lg"></span>
                    <span class="navright-text px-2 d-none d-sm-inline mt-1">Notifikasi</span>
                </a>
                <a href="#" class="navright-item nav-link d-flex flex-column text-white rounded-lg px-2 flex-column text-center" data-toggle="collapse">
                    <span class="fas fa-envelope fa-lg"></span>
                    <span class="navright-text px-2 d-none d-sm-inline mt-1">Pesan</span>
                </a>
                <!-- Profile -->
                <div class="inline-block py-1">
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
            <!-- account toggle -->
                <div class="btn-auth-guest">
                    <a href="{{ route('login') }}" class="w-full btn-a">
                        <button class="blob-btn">
                            Masuk
                            <span class="blob-btn__inner">
                                  <span class="blob-btn__blobs">
                                    <span class="blob-btn__blob"></span>
                                    <span class="blob-btn__blob"></span>
                                    <span class="blob-btn__blob"></span>
                                  </span>
                                </span>
                        </button>
                    </a>
                    <div class="py-1 px-1">
                        <div class="border-t border-transparent"></div>
                    </div>
                    <a href="{{ route('register') }}" class="w-full btn-a">
                        <button class="blob-btn">
                            Mendaftar
                            <span class="blob-btn__inner">
                                  <span class="blob-btn__blobs">
                                    <span class="blob-btn__blob"></span>
                                    <span class="blob-btn__blob"></span>
                                    <span class="blob-btn__blob"></span>
                                  </span>
                                </span>
                        </button>
                    </a>
                </div>
            @endauth
        @endif
    </div>

</nav>--}}
