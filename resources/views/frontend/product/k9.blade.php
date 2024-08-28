@extends('frontend.layout.app')

@section('title')
    K9 Vision
@endsection

@push('css')
@endpush

@section('content')
    <!-- Judul -->
    <section class="container_border">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    <h1><strong>K9 Vision</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Judul -->
    <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
        <div class="position-relative overflow-hidden p-3 text-center">
            <div class="col-md-5 mx-auto my-5">
                <img src="{{ asset('assets/img/K9/img(2).jpg') }}" alt="logo">
                <p class="lead fw-normal">Kacamata teknologi tinggi yang diciptakan dan dirancang khusus untuk anjing dan
                    kuda yang memiliki banyak fungsi.</p>
            </div>
        </div>

        <div id="myCarousel" class="carousel mt-3 slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/K9/2.webp') }}" alt="carousel" class="bd-placeholder-img" width="100%"
                        height="100%">

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Teknologi Tinggi</h1>
                            <p>Kacamata anjing & kuda berteknologi tinggi.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/K9/1.webp') }}" alt="carousel" class="bd-placeholder-img" width="100%"
                        height="100%">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Military Grade</h1>
                            <p>Dirancang dengan fitur dan ketahanan yang baik.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/K9/3.webp') }}" alt="carousel" class="bd-placeholder-img" width="100%"
                        height="100%">
                    <div class="container">
                        <div class="carousel-caption text-end text-black">
                            <h1>Beragam Fungsi</h1>
                            <p>Banyak fungsi yang tertanam pada kacamata K9 Vision.</p>
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
        </div>

        <div class="container py-3 marketing">

            <!-- START THE FEATURETTES -->
            <div class="row featurette align-items-center">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Fungsi dari <b>K9 Vision</b></h2>
                    <ul>
                        <li>Perekam aktifitas anjing dan kuda</li>
                        <li>Menghitung kecepatan lari kuda dan anjing</li>
                        <li>Pelindung mata anjing dan kuda dari bahaya</li>
                        <li>Pelindung mata anjing dan kuda dari gas, asap, air, angin, ranting</li>
                        <li>Pelindung mata anjing dan kuda saat terjun payung</li>
                        <li>Memberikan informasi video dan audio yang dilihat anjing dan kuda secara realtime</li>
                        <li>Memberikan informasi posisi keberadaan anjing dan kuda</li>
                        <li>Memerintahkan langsung kepada anjing melalui audio</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/K9/img(1).jpg') }}" alt="Ruff"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Fitur-fitur <b>K9 Vision</b></h2>
                    <ul>
                        <li>Dapat dilihat secara realtime melalui hp, tv, laptop dan computer</li>
                        <li>Dapat terkoneksi secara realtime 80 channel secara bersamaan</li>
                        <li>Dapat melakukan interaksi 2 arah</li>
                        <li>Desain khusus untuk perlengkapan K9</li>
                        <li>Alat perekam berukuran kecil & anti air</li>
                        <li>Lampu penerangan</li>
                        <li>lampu strobe</li>
                    </ul>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('assets/img/K9/img(19).jpg') }}" alt="Ruff"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7">
                    <h2 class="featurette-heading"><b>K9 Vision</b> Cocok digunakan oleh bidang</h2>
                    <ul>
                        <li>Kepolisian</li>
                        <li>Militer</li>
                        <li>Intelejen</li>
                        <li>SAR</li>
                        <li>Deteksi Narkotika</li>
                        <li>Keamanan</li>
                        <li>Bea Cukai</li>
                        <li>Olahraga anjing & kuda</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/K9/img(21).jpg') }}" alt="Ruff"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
