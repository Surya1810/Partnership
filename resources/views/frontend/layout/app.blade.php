<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="Kami percaya agensi kreatif juga inovatif perlu berorientasi pada perkembangan zaman dan terus mengikuti arus teknologi. Kraf. hadir dengan tujuan untuk menghadirkan kreativitas, keberanian, dan ketangguhan dalam setiap kebutuhan yang kamu perlukan.">
    <meta name="keywords" content="Event Organizer, Bandung, Kraf, Event">
    <meta name="author" content="Partnership">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Partnership | @yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome/6.2.1/css/all.min.css') }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

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
    <link rel="stylesheet" href="{{ asset('assets/css/style_fe.css') }}">

    @stack('css')

</head>

<body>
    <!-- Loader -->
    {{-- <div class="spinner-wrapper">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div> --}}

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
            <div class="container-fluid px-lg-5 py-2">
                <a class="navbar-brand" href="{{ route('landing') }}">
                    <img src="{{ asset('assets/img/logo/light/main.png') }}" alt="logo_main" height="24">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        @if (Route::is('landing'))
                            <li class="nav-item">
                                <button class="nav-link active" aria-current="page" onclick="backToTop()"
                                    id="homee">Home</button>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('landing') }}"
                                    class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                            </li>
                        @endif
                        <li class="nav-item dropdown">
                            <button class="nav-link dropdown-toggle {{ request()->is('about*') ? 'active' : '' }}"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">Company</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('about') }}">About</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('product') }}">Products</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('client*') ? 'active' : '' }}"
                                href="{{ route('client') }}">Client</a>
                        </li>
                        <li class="nav-item dropdown">
                            <button class="nav-link dropdown-toggle {{ request()->is('project*') ? 'active' : '' }}"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">Project</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('gallery') }}">Project Gallery</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('project') }}">Project Reference</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <button class="nav-link dropdown-toggle {{ request()->is('more*') ? 'active' : '' }}"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">More</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">K9 Visior</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Workshop</a>
                                </li>
                                <li><a class="dropdown-item" href="#">High Risk</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('contact*') ? 'active' : '' }}"
                                href="{{ route('contact') }}">Contact</a>
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
                        class="link-putih">hi@partnership.co.id</a></h3>
                <p class="text-secondary">kraf. adalah perusahaaan agensi kreatif yang inovatif dan dinamis, berfokus
                    pada
                    menyediakan solusi
                    kreatif dan layanan pemasaran terpadu untuk berbagai klien dari berbagai industri.</p>
                <img src="{{ asset('assets/img/logo/light/main.png') }}" alt="Logo" height="32px">
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
        <div class="content-wrapper">
            <main>
                @yield('content')
            </main>
        </div>

        <!-- Main Footer -->
        <footer>
            <div class="container" style="min-height: 70svh; color: #FFFFFF;padding-bottom: 40px">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-5 mt-5 pb-2 mb-2">
                    <div class="col-12 col-md-5 mb-3">
                        <a href="/"
                            class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                            <img src="{{ asset('assets/img/logo/light/main.png') }}" alt="logo_main" height="32px">
                        </a>
                        <p class="text-secondary"><strong>Kantor Pusat</strong></p>
                        <p></p>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <p><strong>Partner Workshop<br></strong>Jl. Terusan Jakarta No.42, Babakan Surabaya,
                                    Kec. Kiaracondong, Kota Bandung, Jawa Barat 40281</p>
                            </li>
                        </ul>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.10196433844266!2d107.64939006629403!3d-6.912625189480249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7ecd3aeddb7%3A0xb1b80611740d391e!2sPartner%20Workshop!5e0!3m2!1sen!2sid!4v1719229867483!5m2!1sen!2sid"
                            width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" title="maps"></iframe>
                        <p class="text-secondary"><strong>Partner Care</strong></p>
                        <div class="row mb-3">
                            <div class="col-6 col-md-6">
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="https://wa.me/6282126000126" target="_blank"
                                            class="nav-link p-0 text-white"><i
                                                class="fa-brands fa-whatsapp fa-xl"></i> <strong>0821
                                                2600 0126 ( Admin 1 )</strong></a>
                                    </li>
                                    <li class="nav-item mb-2 mt-2"><a href="https://wa.me/6282117108850"
                                            target="_blank" class="nav-link p-0 text-white"><i
                                                class="fa-brands fa-whatsapp fa-xl"></i> 0821
                                            1710 8850 ( Admin 2 )</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-6">
                                <ul class="nav flex-column float-start">
                                    <li class="nav-item mb-2"><a href="https://wa.me/6289626309580" target="_blank"
                                            class="nav-link p-0 text-white"><i
                                                class="fa-brands fa-whatsapp fa-xl"></i> 0896
                                            2630 9580 ( Admin 3 )</a>
                                    </li>
                                    <li class="nav-item mb-2 mt-2"><a href="https://wa.me/6289512776878"
                                            target="_blank" class="nav-link p-0 text-white"><i
                                                class="fa-brands fa-whatsapp fa-xl"></i> 0895
                                            1277 6878 ( Admin 4 )</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-4 col-md-2 mb-3">
                        <h5 style="color: #0055FF"><strong>Company</strong></h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4 col-md-2 mb-3">
                        <h5 style="color: #0055FF"><strong>Business</strong></h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4 col-md-2 mb-3">
                        <h5 style="color: #0055FF"><strong>Get in touch</strong></h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Contact</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Our
                                    Location</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row pb-3 pt-4">
                    <div class="col-12 text-md-end text-center">
                        <a href="#" target="_blank" class="text-white" style="margin-left: 12px"><i
                                class="fa-brands fa-instagram fa-xl"></i></a>
                        <a href="#" target="_blank" class="text-white" style="margin-left: 12px"><i
                                class="fa-brands fa-facebook fa-xl"></i></a>
                        <a href="#" target="_blank" class="text-white" style="margin-left: 12px"><i
                                class="fa-brands fa-linkedin fa-xl"></i></a>
                        <a href="#" target="_blank" class="text-white" style="margin-left: 12px"><i
                                class="fa-brands fa-youtube fa-xl"></i></a>
                    </div>
                </div>
                <div class="row py-3 text-white border-top mt-2">
                    <small class="col-12 col-md-5 text-white text-md-start text-center">&copy; 2024 PT Partnership
                        Procurement
                        Solution. All
                        rights
                        reserved</small>

                    <a href="{{ route('landing') }}"
                        class="col-12 col-md-2 d-flex align-items-center justify-content-center mb-3 pt-2 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <img src="{{ asset('assets/img/logo/icon_p_white.png') }}" alt="icon_main" height="32px">
                    </a>

                    <div class="col-12 col-md-5 text-md-end text-center">
                        <a href="#" class="text-white" style="text-decoration:none"><small>Syarat &
                                Ketentuan</small></a>
                        <a href="#" class="text-white"
                            style="text-decoration:none; margin-left: 12px"><small>Kebijakan
                                Privasi</small></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Back to top button -->
        <button type="button" class="btn btn-dark btn-floating btn-lg shadow-lg " id="btn-back-to-top"
            aria-label="Back to Top">
            <i class="fas fa-angle-up fa-2xl text-center" style="color: #FFFFFF"></i>
        </button>
        <!-- Whatsapp button -->
        <button type="button" class="btn btn-dark btn-floating btn-lg border-0 shadow-lg" id="whatsapp"
            aria-label="Whatsapp">
            <a href="https://wa.me/62818212023" target="_blank"><i class="fa-brands fa-whatsapp fa-2xl text-center"
                    style="color: #fff;margin-top: 10px;"></i></a>
        </button>
        <!-- Offcanvas button -->
        <button class="btn btn-dark btn-floating btn-lg shadow-lg" type="button" id="offcanvas"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
            aria-label="Offcanvas">
            <i class="fas fa-angle-left fa-2xl" style="color: #FFFFFF"></i>
        </button>
    </div>

    <!-- REQUIRED SCRIPTS -->

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Spinner -->
    {{-- <script>
        const spinnerWrapperEl = document.querySelector('spinner-wrapper');

        window.addEventListener('load', () => {
            spinnerWrapperEl.style.opacity = '0';

            setTimeout(() => {
                spinnerWrapperEl.style.display = 'none';
            }, 200);
        })
    </script> --}}

    <script>
        // Navbar
        const navEl = document.querySelector('.navbar');
        var element = document.getElementById("homee");

        window.addEventListener('scroll', () => {
            if (window.scrollY >= 56) {
                // element.classList.remove("active");
                navEl.classList.add('navbar-scrolled', 'navbar-light');
                navEl.classList.remove('navbar-dark');
                $(".navbar-brand img").attr("src", "{{ asset('assets/img/logo/dark/main.png') }}");
            } else if (window.scrollY < 56) {
                // element.classList.add("active");
                navEl.classList.remove('navbar-light', 'navbar-scrolled');
                navEl.classList.add('navbar-dark');
                $(".navbar-brand img").attr("src", "{{ asset('assets/img/logo/light/main.png') }}");
            }
        })

        //Back to Top Button
        let mybutton = document.getElementById("btn-back-to-top");

        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    @stack('scripts')
</body>

</html>
