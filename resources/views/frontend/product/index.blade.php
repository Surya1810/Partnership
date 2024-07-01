@extends('frontend.layout.app')

@section('title')
    Our Product & Services
@endsection

@push('css')
@endpush

@section('content')
    <!-- Judul -->
    <section class="container_border">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    <h1><strong>Our Product & Services</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Judul -->
    <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
        <div class="container">
            <div class="row g-5 d-flex justify-content-center pt-3 pb-5 w-100">
                @foreach ($products as $data)
                    <div class="col-3 col-md-4 d-flex align-items-stretch">
                        <div class="card shadow border-0 rounded-4">
                            <img src="{{ asset('storage/' . $data->logo) }}" class="card-img-top p-5"
                                alt="{{ asset('storage/' . $data->name) }}">
                            <div class="card-body text-center">
                                <p class="card-text text-start">Some quick example text to build on the card title and make
                                    up the bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-outline-secondary">Pelajari Lebih</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
