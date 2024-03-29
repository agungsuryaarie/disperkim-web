<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('front/img/logo.png') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- Vendor CSS Files -->
    <link href="{{ url('front/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('front/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('front/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('front/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('front/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('front/css/custom.css') }}" rel="stylesheet">

    {{-- blog style --}}
    <link href="{{ url('front/css/blog.style.css') }}" rel="stylesheet">

    {{-- DataTables --}}
    <link rel="stylesheet" type="text/css" href="{{ url('front/DataTables/datatables.min.css') }}">


</head>

<body>

    @include('front.layouts.header')


    @yield('content')

    @include('front.layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="{{ url('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Vendor JS Files -->
    <script src="{{ url('front/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ url('front/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('front/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('front/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('front/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('front/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('front/js/main.js') }}"></script>
    <script src="{{ url('front/DataTables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>

    @yield('script')
</body>

</html>
