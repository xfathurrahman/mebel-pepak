    <div class="container mt-1.5">
        <div class="row carousel-category my-2">
            <div class="col-md-12 mb-2 new-product-text">
                <h4>Kategori</h4>
                <hr>
            </div>
            <div class="slick-wrapper">
                <div id="sc-category-carousel">
                    @foreach($listcategories as $listcategory)
                        <div class="item">
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
    </div>

    <div class="container p-0">
        <div class="owl-carousel owl-theme owl-wrapper carousel-ads">
            <div class="carousel-center-item">
                <img src="{{ asset('storage/assets/banner.jpg') }}" alt="banner-ads">
            </div>
            <div class="carousel-center-item">
                <img src="{{ asset('storage/assets/banner.jpg') }}" alt="banner-ads">
            </div>
        </div>
    </div>

    <div class="container mt-1.5">
        <div class="row carousel-product my-2">
            <div class="mb-8 w-full new-product-text text-left">
                <h4 class="mx-3.5 xl:font-semibold">Produk Terbaru
                    <a href="{{ url('new-products') }}" class="button float-right">Lihat Semua</a>
                </h4>
                <hr>
            </div>
            <div class="owl-carousel sc-products-carousel pl-2.5 owl-theme">
                @foreach($listproducts as $item)
                    <div class="item mx-1">
                        <div class="card">
                            <div class="date-option">
                               <span class="date-post">
                                   {{ $item -> created_at -> diffForHumans() }}
                               </span>
                            </div>
                            <div class="dropdown">
                                <div class="product-option">
                                    <a type="button" id="dropdownMenu" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right text-center">
                                        <a class="dropdown-item" href="#">Tambah ke Favorit</a>
                                        <a class="dropdown-item" href="#">Laporkan Iklan</a>
                                    </div>
                                </div>
                            </div>
                            <a class="a-link" href="{{ url( 'detail/'.Str::slug($item->users->name).'/'.$item -> id.'/'.Str::slug($item->name) ) }}">
                                <img class="image-product" src="{{ asset("storage/product-image")."/".$item -> images -> image_path }}" alt="Image from {{ $item->users->name }}">
                                <div class="card-body p-2">
                                    <div class="tag-price">
                                        <div class="tag-img"></div>
                                        <div class="tag-text">{{ "Rp.".number_format($item -> price) }}</div>
                                    </div>
                                    <div class="product-name text-left">{{ $item -> name }}</div>
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
