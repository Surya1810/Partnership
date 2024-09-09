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
                    <h2>Keunggulan <b>Partnership Workshop</b></h2>

                    <ul class="fs-5">
                        <li><b>Pengalaman dan Keahlian</b><br>Tim pengacara berpengalaman dengan keahlian luas dalam
                            berbagai bidang hukum, memberikan solusi yang tepat dan efektif.</li>
                        <li><b>Pendekatan Personal</b><br>Kami menawarkan layanan yang disesuaikan dengan kebutuhan unik
                            setiap klien, menjadi mitra yang memahami dan melindungi kepentingan Anda.</li>
                        <li><b>Kehadiran dalam Setiap Langkah</b><br>Kami mendampingi klien dari awal hingga akhir proses
                            hukum, memastikan dukungan yang konsisten dan keputusan berdasarkan pertimbangan yang matang.
                        </li>
                        <li><b>Komunikasi Terbuka</b><br>Transparansi dan komunikasi yang jelas adalah prioritas kami,
                            dengan laporan rutin dan jawaban tepat waktu untuk setiap pertanyaan Anda.</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/photo/law/1.webp') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2>Layanan <b>Partnership Workshop</b></h2>
                    <ul class="fs-5">
                        <li><b>Konsultasi Hukum</b><br>Memberikan nasihat hukum yang jelas dan praktis untuk berbagai
                            masalah hukum, termasuk bisnis, perdata, dan pidana.</li>
                        <li><b>Pendampingan Hukum</b><br>Membantu dalam negosiasi, penyusunan kontrak, dan proses hukum
                            lainnya untuk memastikan hak dan kepentingan Anda terlindungi dengan baik.</li>
                        <li><b>Representasi di Pengadilan</b><br>Mewakili klien dalam berbagai kasus hukum dengan strategi
                            yang terencana dan didukung oleh bukti serta argumen hukum yang kuat.</li>
                    </ul>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('assets/img/photo/law/2.webp') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7">
                    {{-- <h2>And lastly, this one. <span class="text-muted">Checkmate.</span> --}}
                    </h2>
                    <p class="fs-5">Partnership Law Consultant berkomitmen untuk menjadi mitra hukum yang dapat
                        diandalkan dalam jangka panjang. Kami tidak hanya fokus pada penyelesaian kasus, tetapi juga pada
                        pencegahan masalah hukum di masa depan, membantu Anda membuat keputusan yang bijaksana dan proaktif
                        dalam segala aspek hukum. Dengan kami di sisi Anda, Anda dapat merasa tenang dan yakin bahwa urusan
                        hukum Anda berada di tangan yang tepat. <br><br>

                        Kami bangga telah membantu banyak klien mencapai hasil yang positif dan akan terus berusaha
                        memberikan layanan hukum yang terbaik. Partnership Law Consultant adalah pilihan tepat bagi siapa
                        saja yang mencari layanan hukum yang profesional, terpercaya, dan berorientasi pada hasil.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/photo/law/3.webp') }}" alt="Partnerhsip"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
