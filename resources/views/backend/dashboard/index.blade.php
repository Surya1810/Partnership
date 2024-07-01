@extends('backend.layout.app')

@section('title')
    Dashboard
@endsection

@push('css')
@endpush

@section('content')
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary rounded-partner">
                        <div class="inner">
                            <h3>{{ $client }}</h3>

                            <p>Our Client</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-clipboard-list"></i>
                        </div>
                        <a href="{{ route('client.index') }}" class="small-box-footer rounded-partner">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary rounded-partner">
                        <div class="inner">
                            <h3>{{ $project }}</h3>

                            <p>Our Project</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-regular fa-address-book"></i>
                        </div>
                        <a href="{{ route('project.index') }}" class="small-box-footer rounded-partner">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary rounded-partner">
                        <div class="inner">
                            <h3>{{ $product }}</h3>

                            <p>Our Product</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-box-open"></i>
                        </div>
                        <a href="{{ route('product.index') }}" class="small-box-footer rounded-partner">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary rounded-partner">
                        <div class="inner">
                            <h3>{{ $photos }}</h3>

                            <p>Our Photos</p>
                        </div>
                        <div class="icon">
                            <i class="fa-regular fa-image"></i>
                        </div>
                        <a href="{{ route('gallery.index') }}" class="small-box-footer rounded-partner">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
