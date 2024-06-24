@extends('frontend.layout.app')

@section('title')
    Client
@endsection

@push('css')
@endpush

@section('content')
    <!-- Judul -->
    <section class="container_border">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    <h1><strong>Our Clients</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Judul -->
    <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
        <div class="container">
            <div class="row g-3 d-flex justify-content-center">
                <div class="col-3 col-md-2">
                    <img src="{{ asset('assets/img/client/01 POLRI.png') }}" alt="Client" style="width: 100%;height: 100%">
                </div>
                <div class="col-3 col-md-2">
                    <img src="{{ asset('assets/img/client/02 BADAN PEMELIHARAAN KEAMANAN.png') }}" alt="Client"
                        style="width: 100%;height: 100%">
                </div>
                <div class="col-3 col-md-2">
                    <img src="{{ asset('assets/Client/03 Samsung.png') }}" alt="Client" style="width: 100%;height: 100%">
                </div>
                <div class="col-3 col-md-2">
                    <img src="{{ asset('assets/Client/04 Podomoro.png') }}" alt="Client" style="width: 100%;height: 100%">
                </div>
                <div class="col-3 col-md-2">
                    <img src="{{ asset('assets/Client/05 Mitshubishi.png') }}" alt="Client"
                        style="width: 100%;height: 100%">
                </div>
                <div class="col-3 col-md-2">
                    <img src="{{ asset('assets/Client/06 MS Glow.png') }}" alt="Client" style="width: 100%;height: 100%">
                </div>
                <div class="col-3 col-md-1">
                    <img src="{{ asset('assets/Client/07 Summarecon.png') }}" alt="Client"
                        style="width: 100%;height: 100%">
                </div>
                <div class="col-3 col-md-1">
                    <img src="{{ asset('assets/Client/08 Dago.png') }}" alt="Client" style="width: 100%;height: 100%">
                </div>
                <div class="col-3 col-md-1">
                    <img src="{{ asset('assets/Client/09 BCA.png') }}" alt="Client" style="width: 100%;height: 100%">
                </div>
                <div class="col-3 col-md-1">
                    <img src="{{ asset('assets/Client/10 Jasa.png') }}" alt="Client" style="width: 100%;height: 100%">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
