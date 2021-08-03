<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        @yield('title', 'Inicio') | Muta
    </title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Helvetica:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.11.1/css/all.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <!-- End Fonts and icons -->
    <!-- CSS Core Files -->
    <link href="{{ asset('assets/css/blk-design-system-pro.min.css?v=1.0.0')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/master.css')}}" rel="stylesheet" />
    
    <!-- End CSSS Core Files -->
    <!-- Carousel -->
    <!-- Css Carousel -->
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet" />
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/css/animate.css" rel="stylesheet" />
    <!-- Script Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <!-- End Carousel -->
    @yield('css')
    <style type="text/css">
        .nav-pills .nav-item .nav-link {
            color: hsla(0, 0%, 100%, 0.8) !important;
        }
    </style>
</head>

<body class="index-page">
<div class="bg-image"></div>
    <div id="loader-wrapper" class="contents">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-10 p-0">
                    @include('layout.components.navbar')
                    <div class="container-fluid px-lg-5 p-2" style="overflow-y: auto; max-height: 95vh;">
                        <div class="mx-4 mb-3">
                            @yield('content')
                        </div>
                    </div>
                </div>
                @include('layout.components.sidebar')
            </div>
        </div>
    </div>
    <!-- Footer -->
    @yield('footer')
    <!-- End Footer -->

    <!-- Core Scripts -->
    <script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- End Core Scripts -->
    <!-- Plugins Scripts -->
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/slick.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('assets/js/plugins/anime.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
    <!-- BlkSystem JS -->
    <script src="{{ asset('assets/js/blk-design-system.min.js?v=1.0.0') }}" type="text/javascript"></script>
    <script>
        function show(container, main_place) {
            const elemento = document.getElementById(container);
            elemento.classList.toggle('d-none')

            const container_elemento = document.getElementById(main_place);
            container_elemento.classList.toggle('d-none')
        }
    </script>
    @yield('js')
</body>