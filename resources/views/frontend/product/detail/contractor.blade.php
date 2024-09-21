@extends('frontend.layout.app')

@section('title')
    {{ $products->name }}
@endsection

@push('css')
@endpush

@section('content')
    <!-- Judul -->
    <section class="container_border">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    {{-- <h1><strong>{{ $products->name }}</strong></h1> --}}
                    <img src="{{ asset('storage/logo/light/' . $products->logo) }}" alt="{{ $products->name }}" class="w-50">
                </div>
            </div>
        </div>
    </section>

    <!-- Judul -->
    <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <p class="lead fw-normal">{{ $products->desc }}</p>
            </div>
        </div>
        <!-- Marketing messaging and featurettes
                                                                                                                                                                                                                                                              ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        {{-- <div id="myCarousel" class="carousel mt-3 slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> --}}

        <div class="container py-3 marketing">
            <!-- START THE FEATURETTES -->
            <div class="row featurette align-items-center">
                <div class="col-md-7">
                    <h2>Keunggulan <b>{{ $products->name }}</b></h2>

                    <ul class="fs-5">
                        <li><b>Layanan Terintegrasi</b><br>Menawarkan solusi lengkap dari perencanaan awal hingga
                            pelaksanaan akhir, memastikan setiap aspek proyek Anda dikelola dengan baik.</li>
                        <li><b>Keahlian Profesional</b><br>Tim kami terdiri dari ahli di bidang arsitektur, teknik, dan
                            konstruksi, memberikan hasil yang memenuhi standar kualitas tertinggi.</li>
                        <li><b>Pengawasan yang Ketat</b><br>Kami mengawasi setiap tahap proyek dengan cermat, memastikan
                            bahwa semua pekerjaan dilakukan sesuai dengan spesifikasi dan regulasi.
                        </li>
                        <li><b>Kustomisasi Proyek</b><br>Layanan kami disesuaikan dengan kebutuhan spesifik proyek Anda,
                            dari desain interior hingga pengaspalan, memastikan hasil yang sesuai dengan visi Anda.</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/photo/contractor/1.webp') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2>Layanan <b>{{ $products->name }}</b></h2>
                    <ul class="fs-5">
                        <li><b>Perencanaan & Pengawasan</b><br>Pengelolaan proyek dari tahap perencanaan hingga pengawasan
                            pelaksanaan untuk memastikan hasil yang optimal.</li>
                        <li><b>Arsitektur & Interior</b><br>Desain arsitektur dan interior yang inovatif dan sesuai dengan
                            kebutuhan dan preferensi klien.</li>
                        <li><b>Pengukuran & Pemetaan</b><br>Layanan pengukuran dan pemetaan akurat untuk mendukung
                            perencanaan dan konstruksi.</li>
                        <li><b>Pengaspalan & Pembetonan</b><br>Pengerjaan pengaspalan jalan dan pembetonan untuk
                            infrastruktur yang kuat dan tahan lama.</li>
                    </ul>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('assets/img/photo/contractor/2.webp') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7">
                    <p class="fs-5">Partnership Contractor menyediakan solusi konstruksi menyeluruh, dari perencanaan dan
                        pengawasan
                        hingga arsitektur, interior, pengukuran, dan pengaspalan. Dengan tim profesional dan layanan yang
                        disesuaikan, kami memastikan setiap proyek Anda selesai dengan kualitas tinggi dan sesuai dengan
                        kebutuhan Anda.</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/photo/contractor/3.jpg') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>


            <hr class="featurette-divider">
            <h3>Produk Kami</h3>
            <div class="row g-2 d-flex justify-content-center text-center">
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                Perawatan & Permeliharaan Gedung
                            </strong>
                            <p>
                                Jasa perawatan dan pemeliharaan gedung anda
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('product.building') }}" class="btn btn-outline-dark">Pelajari</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                Pengaspalan
                            </strong>
                            <p>
                                Jasa pengaspalan yang berkualitas
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                Elektrikal
                            </strong>
                            <p>
                                Memperbaiki dan membuat jalur listrik
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                Pembangunan
                            </strong>
                            <p>
                                Desain, Perencanaan hingga eksekusi pembangunan
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">
            <h3 class="text-center fw-600">Galeri</h3>

            {{-- Perawatan Gedung --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Perawatan Gedung PSDMBP
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/1.jpg') }}" alt="Gedung"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/2.jpg') }}" alt="Gedung"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/3.jpg') }}" alt="Gedung"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/4.jpg') }}" alt="Gedung"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/5.webp') }}" alt="Gedung"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/6.webp') }}" alt="Gedung"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Perawatan Gedung/7.webp') }}" alt="Gedung"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Elektrikal --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Elektrikal BJB Patrol
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Elektrikal/2.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Elektrikal/3.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Elektrikal/4.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Elektrikal/1.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>

            {{-- BJB --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pembangunan Gudang Arsip BJB Patrol
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/1.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/2.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/3.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/4.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/5.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/6.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Arsip BJB/7.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
