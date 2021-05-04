<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Detail') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/detailpage.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ecommerce-template.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/easyzoom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}">
    <!-- General CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Libraries -->
</head>
<body>
        <div id="detailpage">
            <div class="main-wrapper">
                <!-- Header -->
                <div class="fixed header-nav w-full mr-0">
                    @include('components.homepage.navs-menu')
                    @include('components.homepage.navbar-menu')
                </div>
                <!-- Dekorasi -->
                <div class="dekor left-0">
                    <img class="mt-10" src="{{ asset('storage/assets/tupat.png') }}" alt="tupat">
                </div>
                <div class="dekor2 right-0 left-auto">
                    <img class="mt-10" src="{{ asset('storage/assets/tupat.png') }}" alt="tupat">
                </div>
                <!-- Main Content -->
                <div class="main-content pt-32">
                    <div class="container pt-2">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">{{ $details -> categories -> name }}</a></li>
                                <li class="breadcrumb-item title-post active" aria-current="page">{{ $details -> nama }}</li>
                            </ol>
                        </nav>
                    </div>
                    <section class="product-slider-section">
                        @include('components.detailpage.content')
                    </section>
                </div>
                <!-- Footer -->
                <div class="footerdetail">
                    @include('components.homepage.footer')
                </div>
                <div class="spacer"></div>
            </div>

            <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script><!-- Scripts -->
            <!-- Scripts Url -->
            <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>

        </div>

        {{--Carousel Thumbnail--}}
        <script>
            $(document).ready(function (){
                $('.owl-carousel-detail').owlCarousel({
                    loop:false,
                    margin:10,
                    autoWidth:true,
                    nav:false,
                    item: 5,
                    paginationSpeed: 200,
                    slideSpeed: 100,
                    mouseDrag: false,
                    touchDrag: true,
                    dots:false,
                    /*navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],*/
                })
            });
        </script>
        {{--Loop Data Slide--}}
        <script>
            /*Loop Function*/
            var abcElements = document.querySelectorAll('.img-thumbnail-detail');
            for (var i = 0; i < abcElements.length; i++) {
                abcElements[i].id = + i;
                abcElements[i].setAttribute('data-slide-to', i);
            }
        </script>
        {{--Zoom Function--}}
        <script>
            $(function (){
                $('.image-zoom').each(function(){
                    let originalImagePath = $(this).find('img').data('original-image');
                    $(this).zoom({
                        url:originalImagePath,
                        magnify: 2
                    });
                });
            });
        </script>
        {{--Image Upload--}}
        <script src="{{ asset('js/4image-upload.js') }}"></script>


</body>
</html>
