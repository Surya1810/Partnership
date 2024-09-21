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
                        <li><b>Kemudahan Order</b><br>Kami menawarkan proses pemesanan yang mudah dan cepat, sehingga Anda
                            dapat fokus pada ide dan desain Anda, sementara kami mengurus sisanya. Tim kami selalu siap
                            memberikan konsultasi dan panduan untuk memastikan Anda mendapatkan produk dan layanan yang
                            sesuai dengan kebutuhan.</li>
                        <li><b>Bergaransi</b><br>Setiap produk dan jasa yang kami tawarkan dilengkapi dengan garansi,
                            memberikan Anda jaminan kualitas dan ketenangan pikiran. Kami berkomitmen untuk memberikan hasil
                            yang memuaskan dan siap menangani setiap kebutuhan Anda hingga selesai.</li>
                        <li><b>Harga Bersaing</b><br>Kami memahami pentingnya anggaran dalam setiap proyek. Oleh karena itu,
                            kami menawarkan harga yang kompetitif tanpa mengorbankan kualitas. Dengan workshop kami, Anda
                            mendapatkan hasil berkualitas tinggi dengan biaya yang terjangkau.</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/photo/workshop/1.webp') }}" alt="Workshop"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2>Layanan <b>{{ $products->name }}</b></h2>
                    <ul class="fs-5">
                        <li><b>Neon Box & Neon Flex</b><br>Solusi pencahayaan kreatif yang dapat disesuaikan untuk berbagai
                            kebutuhan signage atau dekorasi.</li>
                        <li><b>Letter Sign & Huruf Timbul</b><br>Pembuatan huruf dengan berbagai bahan dan teknik untuk
                            hasil yang mencolok dan tahan lama.</li>
                        <li><b>CNC Router & CNC Laser</b><br>Pemotongan dan ukiran presisi tinggi untuk berbagai material,
                            memastikan detail dan kualitas terbaik dalam setiap produk.</li>
                        <li><b>Cutting Sticker</b><br>Pembuatan stiker dengan desain khusus untuk keperluan branding,
                            dekorasi, atau informasi.</li>
                        <li><b>Welding Pagar & Kanopi</b>Konstruksi dan pengelasan untuk pagar, kanopi, dan struktur lainnya
                            dengan hasil yang kuat dan estetis.</li>
                        <li><b>Billboard & Interior</b><br>Desain dan pemasangan billboard serta layanan interior yang
                            fungsional dan menarik, untuk kebutuhan komersial atau pribadi.</li>
                    </ul>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('assets/img/photo/workshop/2.webp') }}" alt="Workshop"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7">
                    {{-- <h2>And lastly, this one. <span class="text-muted">Checkmate.</span> --}}
                    </h2>
                    <p class="fs-5">Dengan pengalaman dan dedikasi kami, workshop kami tidak hanya menyediakan produk dan
                        layanan yang
                        Anda butuhkan, tetapi juga memberikan pengalaman yang nyaman dan memuaskan dalam setiap langkahnya.
                        Kami percaya bahwa dengan kombinasi peralatan canggih, keahlian profesional, dan komitmen terhadap
                        kepuasan pelanggan, workshop kami adalah mitra terbaik untuk semua proyek visual dan interior Anda.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/photo/workshop/3.webp') }}" alt="Workshop"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">
            <h3>Produk Kami</h3>
            <div class="row d-flex justify-content-center text-center">
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                Pembuatan Neon box
                            </strong>
                            <p>
                                Pembuatan lampu neon untuk berbagai kebutuhan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                Pembuatan pagar, kanopi, meja dan sebagainya
                            </strong>
                            <p>
                                Pembuatan dan pengelasan pagar, meja, kanopi dan sebagainya
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <strong>
                                Meubelair
                            </strong>
                            <p>
                                Pembuatan meubelair seperti kursi, meja, lemari dan sebagainya
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="featurette-divider">
            <h3 class="text-center fw-600">Galeri</h3>

            {{-- Plakat Perbakin --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pembuatan Plakat Lomba Berburu Perbakin
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/plakat/1.jpg') }}" alt="Plakat"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/plakat/2.jpg') }}" alt="Plakat"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/plakat/3.jpg') }}" alt="Plakat"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/plakat/4.jpg') }}" alt="Plakat"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>
            {{-- Plakat Perbakin --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pembuatan Plakat Tali Asih Perbakin
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/plakat/tali-1.jpg') }}" alt="Plakat"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/plakat/tali-2.jpg') }}" alt="Plakat"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>
            {{-- Plakat SESPIM --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pembuatan Plakat SESPIM
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/workshop/plakat/sespim-1.jpg') }}" alt="Plakat"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Neon Box --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pembuatan Neon Box Serumah
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/serumah-1.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/serumah-2.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/serumah-4.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/serumah-5.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/serumah-3.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Neon Box --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pembuatan Neon Box Osha Teknologi
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/osha-1.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/osha-2.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/osha-4.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/osha-4.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Neon Box --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pembuatan Neon Box Lainnya
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/lain-1.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/lain-2.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/lain-3.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/lain-8.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/lain-4.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/lain-5.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/workshop/neon box/lain-6.jpg') }}" alt="Neon Box"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Neon Flex --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pemasangan Neon Flex Angkringan Teh Ita
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon flex/ita.jpg') }}" alt="Neon flex"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon flex/ita-2.jpg') }}" alt="Neon flex"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon flex/ita-3.jpg') }}" alt="Neon flex"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/workshop/neon flex/ita-4.jpg') }}" alt="Neon flex"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Neon Flex --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pemasangan Neon Flex Lainnya
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon flex/lain-3.jpg') }}" alt="Neon flex"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon flex/lain-4.jpg') }}" alt="Neon flex"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/neon flex/lain-1.jpg') }}" alt="Neon flex"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/workshop/neon flex/lain-2.jpg') }}" alt="Neon flex"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pengelasan --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pengelasan Pagar, Kanopi, Meja dsb
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/pengelasan/1.jpg') }}" alt="Pengelasan"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/pengelasan/2.jpg') }}" alt="Pengelasan"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/pengelasan/3.jpg') }}" alt="Pengelasan"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/workshop/pengelasan/4.jpg') }}" alt="Pengelasan"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/workshop/pengelasan/5.jpg') }}" alt="Pengelasan"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/workshop/pengelasan/6.jpg') }}" alt="Pengelasan"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/workshop/pengelasan/7.jpg') }}" alt="Pengelasan"
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
