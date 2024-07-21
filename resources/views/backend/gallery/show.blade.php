@extends('backend.layout.app')

@section('title')
    Show
@endsection

@push('css')
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Show</h1>
                    <ol class="breadcrumb text-black-50">
                        <li class="breadcrumb-item"><a class="text-black-50" href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><strong>Project Gallery</strong></li>
                        <li class="breadcrumb-item active"><strong>Show</strong></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline rounded-partner card-primary">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3 class="card-title">Show</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Gallery of <strong><i>{{ $gallery->name }}</i></strong></h3>
                            <div class="row">
                                @foreach ($gallery->images as $data)
                                    <div class="col-2">
                                        <img src="{{ url('storage/' . $data->file_path) }}" alt="{{ $gallery->name }}"
                                            class="w-100">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
