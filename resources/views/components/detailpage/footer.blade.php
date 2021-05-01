<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Coba</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/cobacoba.css') }}">

</head>
<body>

    <section class="product-slider-section">
        <div class="container">
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

                    {{--            <div class="col-lg-6 col-md-6">
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
                            </section>--}}

                </div>
            </div>
        </div>
    </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    /*Zoom Function*/
    $(function (){
        $('.zoom-image').each(function(){
            var originalImagePath = $(this).find('img').data('original-image');
            $(this).zoom({
                url:originalImagePath,
                magnify: 1
            });
        });
    });
</script>

</body>
</html>

{{--
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Multiple Images +Easyzoom</title>


    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css'>
    <link rel='stylesheet prefetch' href='https://i-like-robots.github.io/EasyZoom/css/easyzoom.css'>

    <link rel="stylesheet" href="{{ asset('css/cobacoba.css') }}">

</head>

<body>

<div class="row">
    <div class="col-xs-offset-4 col-xs-4">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="easyzoom easyzoom--overlay">
                <div class="item">
                    <a href="http://shhdesign.co.uk/owl-zoom/images/hero1-large.jpg">
                        <img src="http://shhdesign.co.uk/owl-zoom/images/hero1.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="easyzoom easyzoom--overlay">
                <div class="item">
                    <a href="http://shhdesign.co.uk/owl-zoom/images/hero1-large.jpg">
                        <img src="http://shhdesign.co.uk/owl-zoom/images/hero1.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="easyzoom easyzoom--overlay">
                <div class="item">
                    <a href="http://shhdesign.co.uk/owl-zoom/images/hero1-large.jpg">
                        <img src="http://shhdesign.co.uk/owl-zoom/images/hero1.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="easyzoom easyzoom--overlay">
                <div class="item">
                    <a href="http://shhdesign.co.uk/owl-zoom/images/hero1-large.jpg">
                        <img src="http://shhdesign.co.uk/owl-zoom/images/hero1.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
<script src='https://i-like-robots.github.io/EasyZoom/dist/easyzoom.js'></script>

<script>

    /*Downloaded from https://www.codeseek.co/adriver/multiple-images-easyzoom-qZqoXz */
    var owl;

    $(document).ready(function() {

        owl = $("#owl-demo");

        owl.owlCarousel({

            navigation: false, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            afterInit: afterOWLinit, // do some work after OWL init
            afterUpdate: afterOWLinit
        });

        function afterOWLinit() {

            // adding A to div.owl-page
            $('.owl-controls .owl-page').append('<a class="item-link" href="#"/>');
            $('.owl-controls .owl-page').addClass('col-xs-6 col-sm-3');
            $('.owl-pagination').addClass('row');

            var pafinatorsLink = $('.owl-controls .item-link');

            /**
             * this.owl.userItems - it's your HTML <div class="item"><img src="http://www.ow...t of us"></div>
             */
            $.each(this.owl.userItems, function(i) {

                $(pafinatorsLink[i])
                    // i - counter
                    // Give some styles and set background image for pagination item
                    .css({
                        'background': 'url(' + $(this).find('img').attr('src') + ') center center no-repeat',
                        '-webkit-background-size': 'cover',
                        '-moz-background-size': 'cover',
                        '-o-background-size': 'cover',
                        'background-size': 'cover'
                    })
                    // set Custom Event for pagination item
                    .click(function() {
                        owl.trigger('owl.goTo', i);
                    });
            });
        }
        $('.easyzoom').easyZoom();
    });

</script>

</body>

</html>
--}}
