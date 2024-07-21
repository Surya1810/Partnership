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
            @foreach ($galleries as $gallery)
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
            @endforeach
        </div>
    </section>
@endsection

@push('scripts')
@endpush
