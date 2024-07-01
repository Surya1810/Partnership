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
                    <p class="lead text-white">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        world’s
                        most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                        system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div>
                </div>
                <div class="d-none d-md-block col-12 col-lg-6">
                    <img src="{{ asset('assets/img/logo/icon_p_white.png') }}" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <section class="s-line-hr-top" style="background-color: #FFFFFF; min-height: 110svh">
        <div class="container">
            <div class="row g-5">
                <div class="col-6 col-md-4 d-flex align-items-stretch">
                    <div class="card border-0 shadow rounded-4">
                        <div class="card-body">
                            <h1>450+ Projects</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="min-height: 100svh">

    </section>
    <!-- About Us -->

    <!-- Our Services -->

    <!-- Our Works-->

    <!-- Client-->
    {{-- <section style="background-color: #FFFFFF">

    </section> --}}

    <!-- Meet the Team-->

    <!-- Galeri Project-->
@endsection

@push('scripts')
@endpush
