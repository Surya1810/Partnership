@extends('frontend.layout.app')

@section('title')
    Our Project Gallery
@endsection

@push('css')
@endpush

@section('content')
    <!-- Judul -->
    <section class="container_border">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    <h1><strong>Our Projects Gallery</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Judul -->
    <section class="s-line-hr-top pb-3" style="min-height: 100svh;background-color: #fff">
        <div class="container">
            {{-- @foreach ($galleries as $gallery)
                <div class="row g-3 pt-3 mb-5">
                    <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                        <h3 class="fs-4 text-navy fw-600 mb-3">
                            {{ $gallery->name }}
                        </h3>
                    </div>
                    <div class="offset-lg-1 col-sm-12 col-lg-7">
                        @foreach ($gallery->images as $image)
                            <div class="col-3 col-md-3">
                                <img src="{{ url('storage/' . $image->file_path) }}" alt="{{ $gallery->name }}"
                                    style="width: 100%;height: 100%">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach --}}
            {{-- ------------------------------------------ Procurement ------------------------------------- --}}

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

            {{-- ------------------------------------------ Contractor ------------------------------------- --}}

            {{-- Kemenkeu --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pengaspalan Area Gedung Kementerian Keuangan
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Pengaspalan/1.jpg') }}" alt="Kemenkeu"
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
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        BJB Render Gudang Arsip
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render Gudang Arsip/1.jpg') }}"
                                alt="BJB" style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render Gudang Arsip/2.jpg') }}"
                                alt="BJB" style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render Gudang Arsip/3.jpg') }}"
                                alt="BJB" style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render Gudang Arsip/4.jpg') }}"
                                alt="BJB" style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render Gudang Arsip/5.jpg') }}"
                                alt="BJB" style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render Gudang Arsip/6.jpg') }}"
                                alt="BJB" style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render Gudang Arsip/7.jpg') }}"
                                alt="BJB" style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render Gudang Arsip/8.jpg') }}"
                                alt="BJB" style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        BJB Render Main Office
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render MO BJB/1.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render MO BJB/2.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render MO BJB/3.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render MO BJB/4.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render MO BJB/5.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render MO BJB/6.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render MO BJB/7.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render MO BJB/8.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        BJB Render Lantai 2
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render lt2 BJB/1.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render lt2 BJB/2.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render lt2 BJB/3.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render lt2 BJB/4.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render lt2 BJB/5.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/Render lt2 BJB/6.jpg') }}" alt="BJB"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>

            {{-- PSDMBP Render --}}
            {{-- <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        PSDMBP Render
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets') }}" alt="PSDMBP" style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- PSDMBP --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Pemasangan Vinyl PSMDBP
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/vinyl/1.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/vinyl/2.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/vinyl/3.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/vinyl/4.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/vinyl/5.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/vinyl/6.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/img/photo/contractor/vinyl/7.jpg') }}" alt="PSDMBP"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>

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

            {{-- Perawatan Taman --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Perawatan Taman PSDMBP
                    </h3>
                </div>
                <div class="offset-lg-1 col-sm-12 col-lg-7">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Perawatan Taman/1.jpg') }}" alt="Taman"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Perawatan Taman/2.jpg') }}" alt="Taman"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Perawatan Taman/3.jpg') }}" alt="Taman"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Perawatan Taman/4.jpg') }}" alt="Taman"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Perawatan Taman/5.jpg') }}" alt="Taman"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('assets/img/photo/contractor/Perawatan Taman/6.jpg') }}" alt="Taman"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>


            {{-- ------------------------------------------ Workshop ------------------------------------- --}}

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

            {{-- ------------------------------------------ Technology ------------------------------------- --}}

            {{-- Secure Tag --}}
            <div class="row g-3 pt-3 mb-5">
                <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                    <h3 class="fs-4 text-navy fw-600 mb-3">
                        Peralatan Secure Tag RFID
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
