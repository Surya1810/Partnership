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
                        <li><b>Layanan Pengadaan Lengkap</b><br> Dari sparepart hingga ATK, kami menyediakan segala
                            kebutuhan bisnis Anda dengan proses yang mudah dan cepat.
                        </li>
                        <li><b>Efisiensi Biaya</b><br>Kami menawarkan solusi pengadaan yang hemat biaya tanpa mengorbankan
                            kualitas produk.</li>
                        <li><b>Kemitraan Luas</b><br>Kami bekerja sama dengan pemasok terpercaya untuk memastikan pasokan
                            barang berkualitas dengan harga yang kompetitif.
                        </li>
                        <li><b>Layanan Disesuaikan</b><br>Setiap bisnis memiliki kebutuhan yang berbeda, dan kami menawarkan
                            solusi pengadaan yang dapat disesuaikan dengan skala dan kebutuhan spesifik Anda.</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/photo/procurement/2.jpg') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2>Layanan <b>{{ $products->name }}</b></h2>
                    <ul class="fs-5">

                        <li><b>Pengadaan Sparepart</b><br>Menyediakan sparepart industri, mesin, dan peralatan lainnya untuk
                            memastikan operasional yang lancar.</li>
                        <li><b>Pengadaan ATK</b><br>Memenuhi kebutuhan alat tulis kantor dan perlengkapan kerja lainnya
                            dengan pilihan produk yang beragam</li>
                        <li><b>Pengadaan Umum</b><br> Mengelola pengadaan berbagai produk lainnya sesuai dengan kebutuhan
                            unik bisnis Anda.</li>
                    </ul>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('assets/img/photo/eo/2.webp') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7">
                    {{-- <h2>And lastly, this one. <span class="text-muted">Checkmate.</span> --}}
                    </h2>
                    <p class="fs-5">Partnership Procurement Solution menyediakan layanan pengadaan lengkap untuk bisnis,
                        termasuk sparepart dan ATK, dengan efisiensi biaya dan layanan yang disesuaikan. Kami memastikan
                        Anda mendapatkan produk berkualitas tepat waktu untuk mendukung kelancaran operasional bisnis.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/photo/procurement/1.jpg') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>


            <hr class="featurette-divider">
            <h3>Produk & Jasa Kami</h3>
            <div class="row d-flex justify-content-center text-center">
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                Pengadaan ATK
                            </strong>
                            <p>
                                Pengadaan Alat Tulis yang anda perlukan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                Pengadaan Sparepart
                            </strong>
                            <p>
                                Pengadaan Sparepart yang anda perlukan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                Pengadaan Umum
                            </strong>
                            <p>
                                Pengadaan untuk segala kebutuhan anda
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">

            <h3 class="text-center fw-600">Galeri</h3>
            {{-- Pengadaan Sparepart --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pengadaan Sparepart PSDMBP
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/1.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/2.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/3.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/4.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/5.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/6.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/7.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Sparepart/8.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pengadaan Medali --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pengadaan Medali SESPIM
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/1.jpg') }}" alt="SESPIM"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/2.jpg') }}" alt="SESPIM"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/3.jpg') }}" alt="SESPIM"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/4.jpg') }}" alt="SESPIM"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/5.jpg') }}" alt="SESPIM"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/6.jpg') }}" alt="SESPIM"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/7.jpg') }}" alt="SESPIM"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/8.jpg') }}" alt="SESPIM"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/9.jpg') }}" alt="SESPIM"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/10.jpg') }}" alt="SESPIM"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/procurement/Pengadaan Medali/11.jpg') }}" alt="SESPIM"
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
