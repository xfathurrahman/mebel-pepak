<div class="container mt-1.5">
    <div class="row carousel-category">
        <div class="col-md-12 mb-4 new-product-text">
            <h4>Kategori</h4>
            <hr>
        </div>
        <div class="slick-wrapper px-2">
            <div id="sc-category-carousel">
                @foreach($listcategories as $listcategory)
                    <div class="item mx-1">
                        <a href="{{ url('http://127.0.0.1:8000/').$listcategory -> slug }}" class="card text-black" style="text-decoration: none">
                            <img class="image-product" src="{{ asset("storage/category-image")."/".$listcategory -> image }}" alt="category-image">
                            <div class="card-body text-center">
                                <p>{{ $listcategory -> name }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
        {{--<div class="owl-carousel sc-category-carousel px-3 owl-theme">
            @foreach($listcategorieslast as $listcategory)
                <div class="item mx-1">
                    <a href="{{ url('http://127.0.0.1:8000/').$listcategory -> slug }}" class="card text-black" style="text-decoration: none">
                        <img class="image-product" src="{{ asset("storage/category-image")."/".$listcategory -> image }}" alt="category-image">
                        <div class="card-body text-center">
                            <p class="py-2">{{ $listcategory -> name }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>--}}
    </div>

    <div class="owl-carousel owl-theme owl-wrapper carousel-center">
        <div class="carousel-center-item mb-8">
            <img src="{{ asset('storage/assets/banner.jpg') }}" alt="banner-ads">
        </div>
    </div>

    <div class="row carousel-product">
        <div class="mb-4 w-full new-product-text text-left">
            <h4 class="mx-3.5 xl:font-semibold">Produk Terbaru
                <a href="{{ url('new-products') }}" class="button float-right">Lihat Semua</a>
            </h4>
            <hr>
        </div>
        <div class="owl-carousel sc-products-carousel px-3.5 owl-theme">
            @foreach($listproducts as $item)
                <div class="item mx-1">
                    <div class="card">
                        <div class="date-option">
                           <span class="date-post">
                               {{ $item -> created_at -> diffForHumans() }}
                           </span>
                        </div>
                        <div class="product-option w-5 h-5 m-1 rounded-full">
                            <a type="button" id="dropdownMenu" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Tambah ke Favorit</a>
                                <a class="dropdown-item" href="#">Laporkan Iklan</a>
                            </div>
                        </div>
                        <a class="a-link" href="{{ url( 'detail/'.Str::slug($item->users->name).'/'.$item -> id.'/'.Str::slug($item->nama) ) }}">
                            <img class="image-product" src="{{ asset("storage/product-image")."/".$item -> images -> image_path }}" alt="Image from {{ $item->users->name }}">
                            <div class="card-body p-2">
                                <div class="tag-info py-2" bg="{{ asset('storage/assets/tagbgred.png') }}">{{ "Rp.".number_format($item -> harga) }}</div>
                                <div class="product-name text-left mt-2">{{ $item -> nama }}</div>
                                <div class="owner-info">
                                    <div class="owner-pp">
                                        @if( $item -> users -> profile_photo_path )
                                            <img class="rounded-full" src="{{ asset("storage")."/".$item -> users -> profile_photo_path }}" alt="{{ $item -> users -> name }}"/>
                                        @else
                                            <img class="rounded-full" src="https://ui-avatars.com/api/?name={{ $item -> users -> name }}&amp;color=7F9CF5&amp;background=EBF4FF" alt="pp-owner"/>
                                        @endif
                                    </div>
                                    <div class="owner-name overflow-ellipsis" data-hover-before="{{ $item -> users -> username }}" data-hover-after="{{ $item -> users -> name }}" type="button"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
