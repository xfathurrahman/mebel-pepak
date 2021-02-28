<!-- Sidebar -->
<div class="main-sidebar position-fixed">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand"><a href="{{route('dashboard')}}">Horokpedia</a></div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{route('dashboard')}}"><img alt="image" src="{{asset('stisla/img/stisla.svg')}}" class="rounded-circle p-2"></a>
        </div>
        <div class="border-t border-gray-100 mt-2"></div>
        <ul class="sidebar-menu">
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}"><a class="nav-link " href="{{route('dashboard')}}"><i class="fas fa-fire"></i><span>{{ __('Dashboard') }}</span></a></li>
            <li class="nav-item {{ Request::is('products/create') ? 'active' : '' }}"><a class="nav-link" href="{{route('products.create')}}"><i class="fas fa-cart-plus"></i></i><span>Tambar Produk</span></a></li>
            <li class="nav-item {{ Request::is('products') ? 'active' : '' }}"><a class="nav-link" href="{{route('products.index')}}"><i class="fas fa-stream"></i><span>Daftar Produk</span></a></li>
            <li class="nav-item dropdown {{ Request::is('user/*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i> <span>Pengaturan</span></a>
                <ul class="dropdown-menu ">
                    <li><a class="nav-link" href="{{ route('profile.show') }}">Akun</a></li>
                    <li><a class="nav-link" href="/address">Alamat</a></li>
                    <li><a class="nav-link" href="/notification">Notifikasi</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
