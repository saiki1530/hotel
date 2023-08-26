<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/image/favicon.png" type="/image/png">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/vendors/linericon/style.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="/vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script> --}}


    {{-- @livewireStyles --}}
</head>
<style>
    .collapse {
        visibility: visible;
    }
</style>

<body>
    @include('layouts.menuUser')
    <div class="min-h-screen bg-gray-100">
        @yield('noidung')
    </div>
    @include('layouts.footerUser')


    <!--================ End footer Area  =================-->
    @stack('modals')

    @livewireScripts

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/js/mail-script.js"></script>
    <script src="/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="/vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="/js/mail-script.js"></script>
    <script src="/js/stellar.js"></script>
    <script src="/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="/js/custom.js"></script>
</body>
<script>
    const menuItems = document.querySelectorAll('.nav-item');

    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            menuItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
        });
    });
</script>

</html>
