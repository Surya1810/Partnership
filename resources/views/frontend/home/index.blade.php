@extends('frontend.layout.app')

@section('title')
    Home
@endsection

@push('css')
@endpush

@section('content')
    <!-- Heroes -->
    <section class="heroes">
        <div class="container h-100">
            <div class="row align-items-center g-5 py-5 h-100">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-white lh-1 mb-3">{{ $tagline->content }}</h1>
                    <p class="lead text-white">Tulis kisah sukses Anda bersama kami. Solusi terbaik akan kami ciptakan untuk
                        Anda!</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 rounded-4">Kenali Lebih
                            Jauh <i class="fa-solid fa-arrow-right"></i></button>
                        {{-- <button type="button" class="btn btn-outline-light btn-lg px-4">Default</button> --}}
                    </div>
                </div>
                <div class="d-none d-md-block col-12 col-lg-6">
                    <img src="{{ asset('assets/img/logo/icon_p_white.png') }}" class="d-block mx-lg-auto img-fluid"
                        alt="icon_P" width="75%" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <!-- start client-->
    <section class="s-line-hr-top" style="background-color: #FFFFFF; height: 20svh">
        <div class="container-fluid h-100 d-none d-md-block">
            <div class="row align-items-center justify-content-center h-100 g-0">
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/01_POLRI.png') }}" alt="polri" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/32_ALFAMART.png') }}" alt="alfamart" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/05_DISHUB.png') }}" alt="dishub" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/31_INDOSAT.png') }}" alt="indosat" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/09_KEMENTRIAN_ESDM.png') }}" alt="esdm"
                        width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/20_KAI.png') }}" alt="kai" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/19_PLN.png') }}" alt="pln" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/24_BJB.png') }}" alt="bjb" width="65%">
                </div>
                <div class="col-1">
                    <img src="{{ asset('assets/img/client/landing/26_PERBAKIN.png') }}" alt="perbakin" width="65%">
                </div>


                <div class="col-1 align-items-center">
                    <a href="{{ route('client') }}" class="btn btn-sm btn-outline-primary rounded-4 w-100">Selengkapnya <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end client-->

    <!-- start keunggulan-->
    <section class="d-flex align-items-center justify-content-center" style="background-color: #FFFFFF; min-height: 80svh">
        <div class="container h-100">
            <div class="row g-3">
                <div class="col-6 col-md-3 d-flex align-items-stretch">
                    <div class="card border-0 shadow rounded-4 w-100 p-3" style="background-color: #0B0B45">
                        <div class="card-body text-white">
                            <h1 class="fs-2 fw-600">14 Tahun</h1>
                            <small>Berdiri sejak 2010</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 d-flex align-items-stretch">
                    <div class="card border-0 shadow rounded-4 w-100 p-3" style="background-color: #0B0B45">
                        <div class="card-body text-white">
                            <h1 class="fs-2 fw-600">7</h1>
                            <small>Produk & Layanan untuk membantu setiap permasalahan</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 d-flex align-items-stretch">
                    <div class="card border-0 shadow rounded-4 w-100 p-3" style="background-color: #0B0B45">
                        <div class="card-body text-white">
                            <h1 class="fs-2 fw-600">50+</h1>
                            <small>Client yang puas dengan kinerja kami</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 d-flex align-items-stretch">
                    <div class="card border-0 shadow rounded-4 w-100 p-3" style="background-color: #0B0B45">
                        <div class="card-body text-white">
                            <h1 class="fs-2 fw-600">450+</h1>
                            <small>Project yang sudah kami kerjakan</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end keunggulan-->

    <!-- end CTA-->
    <section id="aspiration" class="py-lg-5 py-4" style="background-color: #0B0B45">
        <div class="container text-white">
            <div class="row px-lg-5 px-3 py-3 py-sm-2">
                <h2 class="fs-2 fw-600" style="color: #0055ff">
                    Aspirasi </h2>
                <h3 class="fw-light fs-1 mb-5">
                    ”Meningkatkan kesempatan <strong class="fw-700">tumbuh</strong> berjuta insan melalui solusi
                    finansial digital yang <strong class="fw-700">berfokus pada kehidupan</strong>” </h3>
            </div>
        </div>
    </section>
    <!-- end CTA-->

    <!-- start product & layanan -->
    <section class="container_border_front">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    <h1><strong>Tentang kami</strong></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="u-line-hr-top d-flex align-items-center" style="min-height: 70svh;background-color: #fff">
        <div class="container text-center">
            <div class="row g-3 justify-content-center">
                @foreach ($products as $data)
                    <div class="col-12 col-md-3">
                        <div class="card shadow border-0 rounded-4">
                            <div class="card-body">
                                <img src="{{ asset('storage/' . $data->logo) }}" class="w-100 my-4 px-3"
                                    alt="{{ $data->name }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('product') }}" class="btn btn-outline-primary rounded-4 my-5">Pelajari Lebih <i
                    class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
    <!-- end product & layanan -->

    <!-- start workshop,rfid,high risk -->
    <section class="workshop" style="height: 100svh">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="row d-flex justify-content-center text-center">
                    <h1 class="text-white fw-600 mb-5">Apa yang baru dari Partnership</h1>
                    <div class="col-4 col-md-4">
                        <div class="card rounded-4 border-0 h-100 w-100">
                            <img src="{{ asset('assets/img/workshop/workshop.jpeg') }}" alt="workshop"
                                class="card-img-top rounded-4">
                            <div class="card-body rounded-4">
                                <h4 class="text-navy mb-3">
                                    <strong class="fw-700">Partnership</strong>
                                    Workshop
                                </h4>
                                <p>dummy</p>
                            </div>
                        </div>
                        <a href="{{ route('product.detail', ['id' => 1]) }}"
                            class="btn btn-outline-light rounded-4 mt-3">Pelajari Lebih <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class="card rounded-4 border-0 h-100 w-100">
                            <img src="{{ asset('assets/img/workshop/workshop.jpeg') }}" alt="workshop"
                                class="card-img-top rounded-4">
                            <div class="card-body rounded-4">
                                <h4 class="text-navy mb-3">
                                    <strong class="fw-700">Partner</strong> SecureTags
                                </h4>
                                <p>dummy</p>
                            </div>
                        </div>
                        <a href="{{ route('rfid') }}" class="btn btn-outline-light rounded-4 mt-3">Pelajari Lebih <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class="card rounded-4 border-0 h-100 w-100">
                            <img src="{{ asset('assets/img/workshop/climbing.jpeg') }}" alt="workshop"
                                class="card-img-top rounded-4">
                            <div class="card-body rounded-4">
                                <h4 class="text-navy mb-3">
                                    <strong class="fw-700">Partnership</strong> Building Maintanance & Cleaning
                                </h4>
                                <p>dummy</p>
                            </div>
                        </div>
                        <a href="{{ route('product.detail', ['id' => 7]) }}"
                            class="btn btn-outline-light rounded-4 mt-3">Pelajari Lebih <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end workshop,rfid,high risk -->

    <!-- start Project & Galeri-->
    <!-- end Project & Galeri-->

    <!-- start CTA -->
    <section class="join">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="container-gap-lg card-address shadow" style="background-color: #fff">
                    <div class="row justify-content-center align-items-center">
                        <div class="header col-lg-6 col-md-6 col-sm-12">
                            <h2 class="text-navy fw-600 mb-3">
                                Temukan solusi Anda bersama Partnership </h2>
                            <p class="text-grey mb-3">
                                Partnership merupakan perusahaan penyedia produk dan jasa di Indonesia </p>
                            <a href="{{ route('contact') }}" class="btn btn-lg btn-primary rounded-4">Hubungi
                                kami</a>
                        </div>
                        <div class="d-none d-md-block col-12 col-lg-6">
                            <img src="{{ asset('assets/img/logo/icon_p_black.png') }}"
                                class="d-block mx-lg-auto img-fluid" alt="icon_P" width="50%" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end CTA -->
@endsection

@push('scripts')
@endpush
