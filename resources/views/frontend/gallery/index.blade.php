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
    <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
        <div class="container">
            <div class="row g-3 d-flex justify-content-center">
                <div class="col-3 col-md-3">
                    <img src="{{ asset('assets/img/project/BJB_1.jpg') }}" alt="Client" style="width: 100%;height: 100%">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
