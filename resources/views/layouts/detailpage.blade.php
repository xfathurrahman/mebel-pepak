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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer-main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/easyzoom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Libraries -->
</head>
    <body class="font-sans antialiased">
        <div class="main-wrapper">
            <!-- Header -->
            <div class="fixed top-0 header-nav w-full mr-0">
                @include('components.navs-menu')
                @include('components.navbar-menu')
            </div>
            <!-- Main Content -->
            <div class="main-content">
                @include('components.detailpage.breadcrumb')
                <section class="product-slider-section">
                    @include('components.detailpage.content')
                </section>
            </div>
            <div class="wrap-main-footer p-0 m-0 bg-dark">
                <!-- Footer -->
                @include('components.footer')
                <div class="spacer bg-dark m-0 p-0"></div>
            </div>
        </div>

        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
        <script src="{{ asset('js/4image-upload.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('.first ol li a').click(function () {
                    $('.first ol li a.active-1').removeClass('active-1');
                    $(this).closest('a').addClass('active-1');
                });
            });
        </script>

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
                    touchDrag: false,
                    dots:false,
                    navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                    responsive:{
                        350:{
                            items:3,
                            nav:true,
                            mouseDrag: true,
                            touchDrag: true,
                        },
                        768:{
                            items:3,
                            nav:true,
                            mouseDrag: true,
                            touchDrag: true,
                        },
                        1200:{
                            items:4,
                            nav:true,
                            mouseDrag: true,
                            touchDrag: true,
                        },
                        1500:{
                            items:5,

                        }
                    }
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

    </body>
</html>
