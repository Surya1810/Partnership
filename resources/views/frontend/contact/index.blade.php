@extends('frontend.layout.app')

@section('title')
    Home
@endsection

@push('css')
@endpush

@section('content')
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Document Checking</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Document Checking</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row text-center justify-content-center mt-5">
                <div class="col-6">
                    {{-- <div class="card rounded-rfid shadow-md">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="col-12 ">
                                <div class="card-body py-5">
                                    <h4 class="mb-5"><strong>Tag Checking</strong></h4>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label text-left">RFID No.</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" name="name" value="{{ old('name') }}"
                                                style=" border-radius: 10px">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="button"
                                        class="btn btn-outline-secondary rounded-rfid mt-4 px-5"><strong>Check</strong></button>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                </div>
                <div class="col-12">
                    <div class="card card-outline rounded-kraf card-orange">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3 class="card-title">Content List</h3>
                                </div>
                                {{-- @if (auth()->user()->id == 1 || auth()->user()->id == 9) --}}
                                <div class="col-6">
                                    <a href="{{ route('blog.create') }}"
                                        class="btn btn-sm btn-kraf rounded-kraf float-right">Create
                                        Content</a>
                                </div>
                                {{-- @endif --}}
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="blogTable" class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 15%">
                                            Thumbnail
                                        </th>
                                        <th style="width: 30%">
                                            Title
                                        </th>
                                        <th style="width: 10%">
                                            Category
                                        </th>
                                        <th style="width: 10%">
                                            Tags
                                        </th>
                                        <th style="width: 10%">
                                            Created by
                                        </th>
                                        <th style="width: 5%">
                                            Status
                                        </th>
                                        <th style="width: 15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $data)
                                        <tr>
                                            <td class="text-center">
                                                <img class="img-fluid" style="height: 50px"
                                                    src="{{ asset('storage/post/' . $data->image) }}"
                                                    alt="{{ $data->title }}">
                                            </td>
                                            <td>
                                                {{ $data->title }}
                                            </td>
                                            <td>
                                                {{ $data->category }}
                                            </td>
                                            <td>
                                                @php
                                                    $tags = explode(',', $data->tag);
                                                @endphp
                                                @foreach ($tags as $tag)
                                                    <span class="badge bg-kraf">{{ $tag }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a>{{ $data->user->username }}</a><br><small
                                                    class="text-muted">{{ $data->updated_at->toFormattedDateString('d/m/y') }}</small>
                                            </td>
                                            <td>
                                                @if ($data->status == true)
                                                    <span class="badge bg-green">Published</span>
                                                @else
                                                    <span class="badge bg-yellow">Pending</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if (auth()->user()->id == 1 || auth()->user()->id == 9)
                                                    @if ($data->status == false)
                                                        <a class="btn btn-sm btn-success rounded-kraf"
                                                            href="{{ route('blog.status', $data->id) }}">
                                                            <i class="fas fa-check"></i>
                                                        </a>
                                                    @endif
                                                    <a class="btn btn-sm btn-warning rounded-kraf"
                                                        href="{{ route('blog.edit', $data->id) }}">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    @if ($data->status == true)
                                                        <a class="btn btn-sm btn-info rounded-kraf" href="#"
                                                            target="_blank">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                    @endif
                                                    <button class="btn btn-sm btn-danger rounded-kraf"
                                                        onclick="deleteBlog({{ $data->id }})"><i
                                                            class="fas fa-trash"></i></button>

                                                    <form id="delete-form-{{ $data->id }}"
                                                        action="{{ route('blog.destroy', $data->id) }}" method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                @else
                                                    @if ($data->status == true)
                                                        <a class="btn btn-sm btn-info rounded-kraf" href="#">
                                                            <i class="fa-solid fa-eye"></i>
                                                            View Post
                                                        </a>
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
