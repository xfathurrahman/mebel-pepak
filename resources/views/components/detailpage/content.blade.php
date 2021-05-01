<div class="container">
    <div id="productslider" class="carousel slide">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="row">
                    <div class="col-12">
                        <div class="carousel-inner bg-white">
                            @foreach( $listproducts as $details )
                                <div class="carousel-item image-zoom {{$loop->iteration == 1 ? 'active' : ''}}">
                                    <img src="{{ asset("storage/product-image")."/".$details -> gambar }}"
                                         alt="" class="image-product-slide block mx-auto">
                                    {{--<span class="sale-span">Sale</span>--}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 mt-2 mx-auto">
                        <div class="owl-carousel owl-carousel-detail owl-theme">
                            @foreach( $listproducts as $details )
                                <div data-target="#productslider" data-slide-to="#i" class="active img-thumbnail-detail">
                                    <div class="item">
                                        <div class="data-slide-image">
                                            <img src="{{ asset('storage/product-image').'/'.$details -> gambar }}"
                                                 alt="" class="img-thumb">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-8 col-md-8">
                <h3 class="product-name-detail">{{ $details -> nama }}</h3>
                <p class="price">
                    <span class="old-price">Rp.200.000</span>
                    <span class="new-price">{{ "Rp.".number_format( $details -> harga ) }}</span>
                </p>
                <hr>
                <h5>Spesifikasi</h5>
                <div class="row">
                    <div class="col-6">
                        <ol>
                            <li>Kategori</li>
                            <li>Kondisi</li>
                            <li>Berat</li>
                        </ol>
                    </div>
                    <div class="col-6">
                        <ol>
                            <li>: {{ $details -> categories -> name }}</li>
                            <li>: Baru </li>
                            <li>: 1kg</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 pt-2">
                <h1>Dekripsi</h1>
                <hr>
                <div class="description">
                    {{ $details -> deskripsi }}
                </div>

            </div>
        </div>

        <section class="buyer-action">
                <div class="wrap-info-action inline-flex">
                    <div class="tag-info-product inline-flex mr-2">
                        <img src="{{ asset('storage/product-image').'/'.$details -> gambar }}"
                             alt="" class="w-10 h-10 rounded-md">
                        <p>{{ $details -> nama }}dawdw dawda wdawda awa adw wadwad wadaaw wdawdwad dwadawd awdwaadwa wadawwd dwadawd da wdad wda dwada daw awdad wadwa awad</p>
                    </div>
                </div>
                <div class="tag-contact-product inline-flex">
                    <i class="fas fa-circle-notch"></i>
                    <div class="bg-dark text-white text-center p-2 price-btn inline-flex">
                        <i class="fas fa-circle my-auto"></i>&nbsp;&nbsp;
                        <p>{{ "Rp.".number_format( $details -> harga ) }}000.000.000</p>
                    </div>
                    <button class="btn-buy btn contact-seller-btn" type="button">Hubungi Penjual</button>
                </div>
        </section>


        <div class="owl-carousel owl-theme owl-wrapper carousel-center">
            <div class="carousel-center-item mb-8">
                <img src="{{ asset('storage/assets/banner.jpg') }}" alt="banner-ads">
            </div>
        </div>

    </div>
</div>

{{--<div class="container">
    <div id="productslider" class="carousel slide">
        <div class="row">
            <div class="col-lg-4 col-md-4 ">
                <div class="row">
                    <div class="col-12">
                        <div class="carousel-inner">

                            <div class="carousel-item active zoom-image">
                                <img src="{{ asset("storage/product-image/03202128030185_dell.jpg") }}"
                                     alt="" class="img-fluid">
                                <span class="sale-span">Sale</span>
                            </div>
                            <div class="carousel-item zoom-image">
                                <img src="{{ asset("storage/product-image/03202128030185_dell.jpg") }}"
                                     alt="" class="img-fluid">
                                <span class="sale-span">Sale</span>
                            </div>
                            <div class="carousel-item zoom-image">
                                <img src="{{ asset("storage/product-image/03202128030185_dell.jpg") }}"
                                     alt="" class="img-fluid">
                                <span class="sale-span">Sale</span>
                            </div>
                            <div class="carousel-item zoom-image">
                                <img src="{{ asset("storage/product-image/03202128030185_dell.jpg") }}"
                                     alt="" class="img-fluid">
                                <span class="sale-span">Sale</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <ol class="carousel-indicators position-static m-0 justify-content-start">
                            <li data-target="#productslider" data-slide-to="0" class="active">
                                <div class="data-slide-image">
                                    <img src="{{ asset("storage/product-image/03202128030185_dell.jpg") }}"
                                         alt="" class="img-fluid">
                                </div>
                            </li>
                            <li data-target="#productslider" data-slide-to="1" class="active">
                                <div class="data-slide-image">
                                    <img
                                        src="{{ asset("storage/product-image/03202128030185_dell.jpg") }}"
                                        alt="" class="img-fluid">
                                </div>
                            </li>
                            <li data-target="#productslider" data-slide-to="2" class="active">
                                <div class="data-slide-image">
                                    <img
                                        src="{{ asset("storage/product-image/03202128030185_dell.jpg") }}"
                                        alt="" class="img-fluid">
                                </div>
                            </li>
                            <li data-target="#productslider" data-slide-to="3" class="active">
                                <div class="data-slide-image">
                                    <img
                                        src="{{ asset("storage/product-image/03202128030185_dell.jpg") }}"
                                        alt="" class="img-fluid">
                                </div>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <h3 class="product-name-detail">{{ $listproducts -> nama }}</h3>
                <p class="price">
                    <span class="old-price">Rp.200.000</span>
                    <span class="new-price">{{ "Rp.".number_format( $listproducts -> harga ) }}</span>
                </p>
                <hr>
                <h5>Spesifikasi</h5>
                <div class="row">
                    <div class="col-6">
                        <ol>
                            <li>Kategori</li>
                            <li>Kondisi</li>
                            <li>Berat</li>
                        </ol>
                    </div>
                    <div class="col-6">
                        <ol>
                            <li>: {{ $listproducts -> categories -> name }}</li>
                            <li>: Baru </li>
                            <li>: 1kg</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 pt-2">
                <h1>Dekripsi</h1>
                <hr>
                <div class="description">
                    {{ $listproducts -> deskripsi }}
                </div>
            </div>
        </div>

        <section class="buyer-action">
            <div class="wrap-info-action inline-flex">
                <div class="tag-info-product inline-flex mr-2">
                    <img src="{{ asset('storage/product-image').'/'.$details -> gambar }}"
                         alt="" class="w-10 h-10 rounded-md">
                    <p>{{ $details -> nama }}dawdw dawda wdawda awa adw wadwad wadaaw wdawdwad dwadawd awdwaadwa wadawwd dwadawd da wdad wda dwada daw awdad wadwa awad</p>
                </div>
            </div>
            <div class="tag-contact-product inline-flex">
                <i class="fas fa-circle-notch"></i>
                <div class="bg-dark text-white text-center p-2 price-btn inline-flex">
                    <i class="fas fa-circle my-auto"></i>&nbsp;&nbsp;
                    <p>{{ "Rp.".number_format( $details -> harga ) }}000.000.000</p>
                </div>
                <button class="btn-buy btn contact-seller-btn" type="button">Hubungi Penjual</button>
            </div>
        </section>
    </div>
</div>--}}
