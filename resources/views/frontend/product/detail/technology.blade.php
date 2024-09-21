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
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
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
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
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
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
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
                        <li><b>Inovasi Terkini</b><br>Kami selalu mengadopsi teknologi terbaru untuk memastikan bisnis Anda
                            selalu berada di garis depan dalam efisiensi operasional dan keamanan.</li>
                        <li><b>Solusi Khusus</b><br>Kami menawarkan layanan yang disesuaikan dengan kebutuhan unik setiap
                            bisnis, dari implementasi RFID hingga pengembangan perangkat lunak yang dirancang khusus.</li>
                        <li><b>Integrasi Lancar</b><br>Teknologi kami dapat diintegrasikan dengan sistem yang ada,
                            memastikan transisi yang mulus tanpa mengganggu operasional harian Anda.</li>
                        <li><b>Dukungan Profesional</b>Tim ahli kami siap memberikan konsultasi dan dukungan penuh, mulai
                            dari perencanaan hingga implementasi, memastikan solusi teknologi kami memberikan hasil
                            maksimal.</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/photo/tech/1.webp') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2>Layanan <b>{{ $products->name }}</b></h2>
                    <ul class="fs-5">
                        <li><b>RFID & IoT Solutions</b><br>Solusi pencahayaan kreatif yang dapat disesuaikan untuk berbagai
                            kebutuhan signage atau dekorasi.</li>
                        <li><b>Custom Software Development</b><br>Pengembangan perangkat lunak yang disesuaikan untuk
                            memenuhi kebutuhan spesifik bisnis Anda.</li>
                        <li><b>IT Consulting</b><br>Memberikan panduan strategis untuk membantu bisnis memilih dan
                            mengimplementasikan teknologi terbaik untuk pertumbuhan dan efisiensi.</li>
                    </ul>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('assets/img/photo/tech/2.webp') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7">
                    {{-- <h2>And lastly, this one. <span class="text-muted">Checkmate.</span> --}}
                    </h2>
                    <p class="fs-5">Partnership Technology menyediakan solusi teknologi canggih yang dirancang untuk
                        mengoptimalkan operasi bisnis Anda. Dari RFID hingga perangkat lunak khusus, kami menawarkan inovasi
                        yang disesuaikan dengan kebutuhan unik Anda, didukung oleh tim ahli untuk memastikan integrasi yang
                        mulus dan hasil yang maksimal.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/photo/tech/3.webp') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">
            <h3>Produk & Jasa Kami</h3>
            <div class="row g-2 d-flex justify-content-center text-center">
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                Partner Secure Tag Asset Management
                            </strong>
                            <p>
                                Teknologi RFID untuk pendataan aset
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('product.securetag') }}" class="btn btn-outline-dark">Pelajari</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                Partner Secure Tag Document Management
                            </strong>
                            <p>
                                Teknologi RFID untuk pendataan dokumen
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('product.securetag') }}" class="btn btn-outline-dark">Pelajari</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                K9 Vision
                            </strong>
                            <p>
                                Teknologi alat pembantu K9
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('product.k9-vision') }}" class="btn btn-outline-dark">Pelajari</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                Gun Detector
                            </strong>
                            <p>
                                Teknologi pendeteksi senjata api
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('product.k9-vision') }}" class="btn btn-outline-dark">Pelajari</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="featurette-divider">
            <h3 class="text-center fw-600">Galeri</h3>

            {{-- Secure Tag --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Secure Tag RFID
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/tech/RFID/1.webp') }}" alt="RFID"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/tech/RFID/2.webp') }}" alt="RFID"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/tech/RFID/3.webp') }}" alt="RFID"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>

            {{-- K9 Vision --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        K9 Vision
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/tech/K9/9.jpg') }}" alt="K9"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/tech/K9/10.jpg') }}" alt="K9"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/tech/K9/11.jpg') }}" alt="K9"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/tech/K9/5.jpg') }}" alt="K9"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/tech/K9/6.jpg') }}" alt="K9"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/tech/K9/7.jpg') }}" alt="K9"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/tech/K9/8.jpg') }}" alt="K9"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/tech/K9/1.jpg') }}" alt="K9"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/tech/K9/2.jpg') }}" alt="K9"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/tech/K9/4.jpg') }}" alt="K9"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Gun Detector --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Gun Detector
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/tech/Gun Detector/1.jpg') }}" alt="Gun Detector"
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
