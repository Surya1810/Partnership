@extends('backend.layout.app')

@section('title')
    Upload
@endsection

@push('css')
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Upload</h1>
                    <ol class="breadcrumb text-black-50">
                        <li class="breadcrumb-item"><a class="text-black-50" href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><strong>Project Gallery</strong></li>
                        <li class="breadcrumb-item active"><strong>Upload</strong></li>
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
                                    <h3 class="card-title">Upload</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <h3>Gallery of <strong><i>{{ $gallery->name }}</i></strong></h3>
                                <form action="{{ route('image.store') }}" method="POST" class="dropzone"
                                    enctype="multipart/form-data" id="addImage">
                                    @csrf
                                    <input name="gallery_id" type="hidden" value="{{ $gallery->id }}">
                                </form>
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
