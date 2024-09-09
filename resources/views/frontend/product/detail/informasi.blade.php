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
                        <li><b>Desain dan Pengalaman Pengguna yang Optimal</b><br>Kami menciptakan website yang tidak hanya
                            menarik secara visual, tetapi juga mudah digunakan, memastikan pengalaman pengguna yang optimal.
                        </li>
                        <li><b>Sistem Informasi Terintegrasi</b><br>Layanan kami meliputi pengembangan sistem informasi yang
                            terintegrasi dengan operasi bisnis Anda, memungkinkan pengelolaan data yang efisien dan
                            mendukung pengambilan keputusan yang lebih baik.</li>
                        <li><b>Solusi yang Disesuaikan</b><br>Setiap produk dan layanan yang kami tawarkan dirancang khusus
                            untuk memenuhi kebutuhan spesifik klien, memastikan hasil yang sesuai dengan tujuan bisnis Anda.
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/photo/it/1.webp') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2>Layanan <b>{{ $products->name }}</b></h2>
                    <ul class="fs-5">
                        <li><b>Pengembangan Website</b><br>Menciptakan situs web yang fungsional, responsif, dan menarik
                            untuk memperkuat kehadiran online Anda.</li>
                        <li><b>Sistem Informasi</b><br>Pengembangan dan integrasi sistem informasi untuk mendukung operasi
                            bisnis dan pengelolaan data yang efisien.</li>
                        <li><b>Manajemen Konten</b><br>Layanan pengelolaan konten yang memastikan website Anda selalu
                            up-to-date dan relevan.</li>
                        <li><b>Optimasi SEO</b><br>Meningkatkan visibilitas online Anda dengan teknik optimasi mesin pencari
                            yang efektif.</li>
                    </ul>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('assets/img/photo/it/1.webp') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7">
                    {{-- <h2>And lastly, this one. <span class="text-muted">Checkmate.</span> --}}
                    </h2>
                    <p class="fs-5">Dengan Partnership Information System & Website, Anda mendapatkan lebih dari sekadar
                        solusi teknologi namun Anda mendapatkan mitra yang berkomitmen untuk membantu bisnis Anda tumbuh dan
                        berkembang di dunia digital.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/photo/it/1.webp') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
