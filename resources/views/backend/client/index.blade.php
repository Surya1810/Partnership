@extends('backend.layout.app')

@section('title')
    Client
@endsection

@push('css')
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Client</h1>
                    <ol class="breadcrumb text-black-50">
                        <li class="breadcrumb-item"><a class="text-black-50" href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><strong>Client</strong></li>
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
                                    <h3 class="card-title">Client List</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="card">

                            </div>
                            @foreach ($clients as $data)
                                <div class="card">
                                    <div class="card-body">
                                        <img src="" alt="client_logo">
                                    </div>
                                    <div class="card-footer">
                                        <small>{{ $data->id }}. {{ $data->name }}</small>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
