<div class="container">
    <div id="productslider" class="carousel slide">
        <div class="row">

            <div class="col-lg-5 col-md-12">
                <div class="row">
                    <div class="col-12">
                        <hr class="target-scroll opacity-0 p-0 m-0" id="tab-row">
                        <div class="carousel-inner mx-auto bg-white">
                            @foreach( $images as $image )
                                <div id="zoom" class="carousel-item image-zoom {{ $loop->iteration == 1 ? 'active' : '' }}">
                                    <img src="{{ asset("storage/product-image")."/".$image -> image_path }}"
                                         alt="" class="image-product-slide block mx-auto">
                                    <span class="sale-span">&nbsp;&nbsp;Diskon</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-10 mt-2.5 mx-auto">
                        <div class="owl-carousel owl-carousel-detail owl-theme">
                            @foreach( $images as $image )
                                <button type="button" data-target="#productslider" data-slide-to="#i" class="active img-thumbnail-detail btn btn-outline-success">
                                    <div class="item">
                                        <div class="data-slide-image">
                                            <img src="{{ asset('storage/product-image').'/'.$image -> image_path }}"
                                                 alt="" class="img-thumb">
                                        </div>
                                    </div>
                                </button>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-7 col-md-12 product-detail-column">
                <h3 class="product-name-detail">{{ $details -> name }}dawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawawaw</h3>
                <p class="price">
                    <span class="old-price">Rp.200.000</span>
                    <span class="new-price">@currency( $details -> price )</span>
                </p>

                <hr>

                <h5>Detail Iklan</h5>
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

                <div class="main-detail-seller py-4 bg-white rounded-md">

                    <div class="row" style="padding: 0 15px !important; margin: 0!important;">
                        <div class="col-2 img-seller">
                            <a href="#">
                                <img class="m-0 rounded-full" src="{{ $details -> users -> profile_photo_url }}" alt="{{ $details -> users -> name }}" />
                            </a>
                        </div>
                        <div class="col-8" style="padding: 0 0 0 15px !important;">
                            <div class="detail-seller my-auto">
                                <a class="text-uppercase" href="#">{{ $details -> users -> name }}</a>
                                <span><i class="fas fa-map-marker-alt">&emsp;&nbsp;&nbsp;</i>Winong</span>
                                <span><i class="fas fa-business-time">&emsp;</i>Bergabung sejak Juni 2021</span>
                            </div>
                        </div>
                        <div class="col-2 follow-btn">
                            <a href="#">
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-plus" style="font-size: 15px">&nbsp;</i>Ikuti
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="row text-center text-white mt-3" style="padding: 0 15px;">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <a href="#">
                                <button type="button" class="btn btn-outline-primary btn-kontak">
                                    <i class="fas fa-paper-plane">&nbsp;</i>Kirim Pesan
                                </button>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <a href="#">
                                <button type="button" class="btn btn-outline-secondary btn-kontak">
                                    <i class="fas fa-sms">&nbsp;</i>081328086566
                                </button>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <a href="#">
                                <button type="button" class="btn btn-outline-success btn-kontak">
                                    <i class="fab fa-whatsapp-square">&nbsp;</i>081328086566
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="row text-center mt-3 ads-action">
                        <div class="col-4" style="padding: 0 !important;">
                            <a href="#">
                                <div class="share-ads">
                                    <i class="fas fa-share-alt">&emsp;</i>
                                        Bagikan
                                    <p class="float-right" style="margin-right: -3px">|</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-4" style="padding: 0 !important;">
                            <a href="#">
                                <div class="add-to-fav">
                                    <i class="far fa-heart">&emsp;</i>+ Favorit
                                    <p class="float-right" style="margin-right: -3px">|</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-4" style="padding: 0 !important;">
                            <a href="#">
                                <div class="report-ads">
                                    <i class="fas fa-exclamation-triangle">&emsp;</i>Laporkan
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <hr style="margin-top: 8px; margin-bottom: 0">

    <div class="row" id="tab-row">
        <div class="col-lg-12 col-md-12">
            <div class="tabs">
                <div class="tab-header">
                    <div onclick="smoothScroll(document.getElementById('tab-row'))" class="active"><i class="fas fa-file-signature" style="margin-left: -10px" aria-hidden="true"></i>&emsp;Deskripsi</div>
                    <div onclick="smoothScroll(document.getElementById('tab-row'))"><i class="fas fa-comments-dollar" aria-hidden="true"></i>&emsp;Komentar</div>
                    <div onclick="smoothScroll(document.getElementById('tab-row'))">&emsp;<i class="fa fa-map-marked-alt" aria-hidden="true"></i>&emsp;Lokasi</div>
                </div>
                <div class="tab-indicator"></div>
                <div class="tab-body">
                    <div class="active">
                        <p>{{ $details -> description }}Quinoa can be rubed with quartered raspberries, also try tossing the fritters with red wine.</p>
                    </div>
                    <div>
                        <p>komen</p>
                    </div>
                    <div>
                        <p>lokasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 pt-2">
            <h1>Iklan Terkait</h1>
        </div>
    </div>

</div>

<div id="buyer-action-id" class="buyer-action hide">
    <div class="wrap-info-action inline-flex">
        <div class="tag-info-product inline-flex mr-2">
            <img src="{{ asset('storage/product-image').'/'.$imagesthumb -> image_path }}"
                 alt="" class="w-10 h-10 rounded-md">
            <p>{{ $details -> name }}</p>
        </div>
    </div>
    <div class="tag-contact-product inline-flex">
        <i class="fas fa-circle-notch"></i>
        <div class="bg-dark text-white text-center p-2 price-btn inline-flex">
            <i class="fas fa-circle my-auto"></i>&nbsp;&nbsp;
            <p style="min-width: 100px">@currency( $details -> price )</p>
        </div>
        <button class="btn-buy btn contact-seller-btn" type="button">Kirim Pesan</button>
    </div>
</div>

<script>
    let tabs = document.querySelector(".tabs");
    let tabHeader = tabs.querySelector(".tab-header");
    let tabBody = tabs.querySelector(".tab-body");
    let tabIndicator = tabs.querySelector(".tab-indicator");
    let tabHeaderNodes = tabs.querySelectorAll(".tab-header > div");
    let tabBodyNodes = tabs.querySelectorAll(".tab-body > div");

    for(let i=0;i<tabHeaderNodes.length;i++){
        tabHeaderNodes[i].addEventListener("click",function(){
            tabHeader.querySelector(".active").classList.remove("active");
            tabHeaderNodes[i].classList.add("active");
            tabBody.querySelector(".active").classList.remove("active");
            tabBodyNodes[i].classList.add("active");
            tabIndicator.style.left = `calc(calc(calc(33.3% - 5px) * ${i}) + 10px)`;
        });
    }

</script>

<script>
    myID = document.getElementById("buyer-action-id");

    var myScrollFunc = function () {
        var y = window.scrollY;
        if (y >= 400) {
            myID.className = "buyer-action show"
        } else {
            myID.className = "buyer-action hide"
        }
    };
    window.addEventListener("scroll", myScrollFunc);
</script>

<script>
    window.smoothScroll = function(target) {
        var scrollContainer = target;
        do { //find scroll container
            scrollContainer = scrollContainer.parentNode;
            if (!scrollContainer) return;
            scrollContainer.scrollTop += 1;
        } while (scrollContainer.scrollTop == 0);

        var targetY = 0;
        do { //find the top of target relatively to the container
            if (target == scrollContainer) break;
            targetY += target.offsetTop;
        } while (target = target.offsetParent);

        scroll = function(c, a, b, i) {
            i++; if (i > 30) return;
            c.scrollTop = a + (b - a) / 30 * i;
            setTimeout(function(){ scroll(c, a, b, i); }, 10);
        }
        // start scrolling
        scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
    }
</script>
