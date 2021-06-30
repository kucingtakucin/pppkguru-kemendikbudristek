<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Kemdikbud" />
    <meta name="keywords" content="GTK, Kemdikbud, Guru, Peserta-didik, Inspiratif" />
    <meta name="description" content="Guru Inspiratif - GTK Kemdikbud" />
    <meta name="Version" content="v1.0" />

    <!-- favicon -->
    <link rel="shortcut icon" href="https://banper.binsuslat.kemdikbud.go.id/pkk/assets/img/custom/logo-sq.png">
    <!-- Bootstrap -->
    <link href="{{ asset('assets-front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- tobii css -->
    <link href="{{ asset('assets-front/css/tobii.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- Slider -->               
    <link rel="stylesheet" href="{{ asset('assets-front/css/tiny-slider.css') }}"/> 
    
    <!-- Main Css -->
    <link href="{{ asset('assets-front/css/style.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets-front/css/custom.css ')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets-front/css/colors/default.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-front/css/custom-2.css') }}" rel="stylesheet" type="text/css" />
    <!-- JQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <!-- <script src="assets/js/jquery.modal.min.js"></script> -->
    <!-- <link rel="stylesheet" href="assets/css/jquery.modal.css"> -->

    @stack('styles')


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body>

    <!-- BEGIN: Header-->
    @include('layouts.template-front.header')
    <!-- END: Header-->

    <!-- BEGIN: Content-->
            @yield('content')
    <!-- END: Content-->

    <!-- BEGIN: Footer-->
    @include('layouts.template-front.footer')
    <!-- END: Footer-->

    <script>
        var APP_URL = "{{ url('/') }}";
    </script>

    
    <!-- javascript -->
    <script src="{{ asset('assets-front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-front/js/jquery.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('assets-front/js/tiny-slider.js') }}"></script>
    <!-- tobii js -->
    <script src="{{ asset('assets-front/js/tobii.min.js') }}"></script>
    <!-- Icons -->
    <script src="{{ asset('assets-front/js/feather.min.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('assets-front/js/wow.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('assets-front/js/plugins.init.js') }}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('assets-front/js/app.js') }}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    <script src="{{ asset('assets-front/js/clamp.min.js') }}"></script>
    <script src="{{ asset('assets-front/js/succinct-master/jQuery.succinct.min.js') }}"></script>
    <script>
        // $('.truncate').succinct();
        $('.read-more').click(function() {
            $('.detail-content').toggleClass('truncate');
        })

        function klikmore() {
        var btnText = document.getElementById('read-more');

        if (btnText.innerHTML === 'Selengkapnya') {
            btnText.innerHTML = 'Selengkapnya'; 
        } else {
            btnText.innerHTML = 'Lebih sedikit'; 
        }
        }
    </script>
    <!-- BEGIN: Page JS-->
    @stack('scripts')
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
