<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="_token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer-main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    {{-- owl.theme.default.css untuk navigasi --}}
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>
    <!-- General CSS Files -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Libraries -->

</head>
    <body class="font-sans antialiased">
        <div class="main-wrapper">
            <!-- Header -->
            <div class="fixed top-0 header-nav w-full mr-0">
                @include('components.navs-menu')
                @include('components.navbar-menu')
            </div>
            <!-- Carousel -->
            <div class="main-carousel-promo carousel container px-0">
                @include('components.homepage.carousel')
                <div class="btn-seeall-carousel">
                    <a href="{{ url('new-products') }}" class="button float-right">Lihat Semua</a>
                </div>
            </div>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body text-center">
                        @include('components.homepage.content')
                    </div>
                </section>
            </div>
            <!-- Footer -->
            @include('components.footer')
        </div>

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="{{ asset('js/owl.carousel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>

        {{--CHECKBOX--}}
        <script>
            const chk = document.getElementById('checkbox');
            chk.addEventListener('change', () => {
                document.body.classList.toggle('dark');
            });
        </script>
        {{--CAROUSEL PROMO--}}
        <script>
            $(document).ready(function(){
                $('.carousel-center').owlCarousel({
                    center: true,
                    items:2,
                    loop:true,
                    /*stagePadding: 70,
                    margin: 10,*/
                    autoplay: true,
                    autoplayHoverPause:true,
                    autoplayTimeout: 5000,
                    delay: 1000,
                    dots: true,
                    smartSpeed: 1000,
                    navText : ['<i class="fa iconleft fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                    nav:true,
                    responsive:{
                        0:{
                            items:1,
                            nav: false
                        },
                        600:{
                            items:1,
                        },
                        1000:{
                            items:1,
                        }
                    }
                })
            });
        </script>
        {{--CAROUSEL CATEGORIES--}}
        <script>
            $('#sc-category-carousel').slick({
                rows: 2,
                infinite: false,
                speed: 300,
                slidesToShow: 7,
                slidesToScroll: 7,
                arrows: true,
                dots: false,
                lazyLoad: 'ondemand',
                prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
                nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
                responsive: [
                    {
                        breakpoint: 850,
                        settings: {
                            slidesToShow: 6,
                            slidesToScroll: 6,
                        }
                    },
                    {
                        breakpoint: 650,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5,
                        }
                    }
                ]
            });

        </script>
        {{--CAROUSEL PRODUCTS--}}
        <script>
            $(document).ready(function (){
                $('.sc-products-carousel').owlCarousel({
                    loop:false,
                    center: false,
                    margin:3,
                    lazyLoad:true,
                    autoWidth:true,
                    nav:true,
                    item: 7,
                    slideBy: 7,
                    navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                    dots:false,
                    responsive:{
                        350:{
                            items:2,
                            slideBy:2,
                            margin:5,
                        },
                        600:{
                            items:4,
                            slideBy:4
                        },
                        1000:{
                            items:5,
                            slideBy:5
                        }
                    }
                })
            });
        </script>
        {{--CAROUSEL ADS--}}
        <script>
            $(document).ready(function(){
                $('.carousel-ads').owlCarousel({
                    center: true,
                    items:2,
                    loop:true,
                    stagePadding: 70,
                    margin: 10,
                    autoplay: true,
                    autoplayHoverPause:true,
                    autoplayTimeout: 5000,
                    delay: 1000,
                    smartSpeed: 1000,
                    dots: false,
                    navText : ['<i class="fa iconleft fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                    nav:false,
                    responsive:{
                        0:{
                            items:1,
                            nav: false
                        },
                        600:{
                            items:1,
                        },
                        1000:{
                            items:1,
                        }
                    }
                })
            });
        </script>

    </body>
</html>
