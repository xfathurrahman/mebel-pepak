<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @isset($meta)
    {{ $meta }}
    @endisset

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Libraries -->
    <!-- Template Stisla CSS -->
    <link rel="stylesheet" href="{{asset('stisla/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('stisla/css/components.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    {{--<link rel="stylesheet" href="{{asset('css/dropzone.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/4image-upload.css') }}">--}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased sidebar-mini">
    <div id="app">
        <div class="main-wrapper">
            @include('components.dashboard.navigation-menu')
            @include('components.dashboard.sidebar-menu')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        {{ $slot }}
                    </div>
                </section>
            </div>

        </div>

        @stack('modals')

        @livewireScripts

        @include('components.dashboard.footer')

        <!-- General JS Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="{{ asset('stisla/js/stisla.js')}}"></script>
        <script src="{{ asset('stisla/js/page/modules-sweetalert.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>
        <script src="https://cdn.tiny.cloud/1/flyt6ym60hfvfgkqqebenxxsyetwj9ku6sa218qn3ri1gop4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.js"></script>--}}
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

        <!-- JS Libraies -->

        <!-- Template Stisla JS File -->
        <script src="{{ asset('stisla/js/scripts.js')}}"></script>
        <script src="{{ asset('stisla/js/custom.js')}}"></script>
        {{--<script src="{{ asset('js/dropzone.min.js')}}"></script>
        <script src="{{ asset('js/fine-uploader.min.js')}}"></script>--}}
        <script src="{{ asset('js/image-uploader.js')}}"></script>
        <!-- Page Specific JS File -->
    </div>
</body>

</html>
