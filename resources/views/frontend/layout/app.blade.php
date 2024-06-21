<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="Kami percaya agensi kreatif juga inovatif perlu berorientasi pada perkembangan zaman dan terus mengikuti arus teknologi. Kraf. hadir dengan tujuan untuk menghadirkan kreativitas, keberanian, dan ketangguhan dalam setiap kebutuhan yang kamu perlukan.">
    <meta name="keywords" content="Event Organizer, Bandung, Kraf, Event">
    <meta name="author" content="Kraf">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Partnership | @yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome/6.2.1/css/all.min.css') }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap"
        rel="stylesheet" />

    <!-- Our style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('css')

</head>

<body style="background-color: #0C0C0C">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
            <div class="container-fluid px-4 py-2">
                <a class="navbar-brand" href="{{ route('landing') }}">
                    <img src="{{ asset('assets/img/logo/main_light.png') }}" alt="logo_main" height="35">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button class="nav-link active" aria-current="page" onclick="backToTop()"
                                id="homee">Home</button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- offcanvas -->
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-5">
                <p class="text-secondary">Ready to work with us?</p>
                <h3 class="mb-5"><a href="mailto:hi@madebykraf.com?subject=Mail from Website"
                        class="link-putih">hi@madebykraf.com</a></h3>
                <p class="text-secondary">kraf. adalah perusahaaan agensi kreatif yang inovatif dan dinamis, berfokus
                    pada
                    menyediakan solusi
                    kreatif dan layanan pemasaran terpadu untuk berbagai klien dari berbagai industri.</p>
                <img src="{{ asset('assets/Logo/logo-k-light-ok.png') }}" alt="Logo">
                <div class="mt-5">
                    <h5 class="mb-2">Follow Us</h5>
                    <ul class="list-unstyled d-flex">
                        <li><a class="text-white" href="https://www.instagram.com/madebykraf" target="_blank"><i
                                    class="fa-brands fa-instagram fa-lg"></i></a>
                        </li>
                        <li class="ms-3"><a class="text-white" href="https://www.facebook.com/madebykraf"
                                target="_blank"><i class="fa-brands fa-facebook fa-lg"></i></a>
                        </li>
                        <li class="ms-3"><a class="text-white" href="https://www.linkedin.com/company/madebykraf/"
                                target="_blank"><i class="fa-brands fa-linkedin fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #EDEDED">
            <main>
                @yield('content')
            </main>

            <!-- Back to top button -->
            <button type="button" class="btn btn-dark btn-floating btn-lg" id="btn-back-to-top"
                aria-label="Back to Top">
                <i class="fas fa-angle-up fa-2xl text-center" style="color: #FFFFFF"></i>
            </button>
            <!-- Whatsapp button -->
            <button type="button" class="btn btn-dark btn-floating btn-lg border-0" id="whatsapp"
                aria-label="Whatsapp">
                <a href="https://wa.me/62818212023" target="_blank"><i
                        class="fa-brands fa-whatsapp fa-2xl text-center"
                        style="color: #fff;margin-top: 10px;"></i></a>
            </button>
            <!-- Offcanvas button -->
            <button class="btn btn-dark btn-floating btn-lg" type="button" id="offcanvas"
                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                aria-label="Offcanvas">
                <i class="fas fa-angle-left fa-2xl" style="color: #FFFFFF"></i>
            </button>
        </div>

        <!-- Main Footer -->
        <footer>

        </footer>
    </div>

    <!-- REQUIRED SCRIPTS -->

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    @stack('scripts')
</body>

</html>
