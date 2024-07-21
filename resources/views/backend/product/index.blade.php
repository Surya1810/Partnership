@extends('backend.layout.app')

@section('title')
    Product
@endsection

@push('css')
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product</h1>
                    <ol class="breadcrumb text-black-50">
                        <li class="breadcrumb-item"><a class="text-black-50" href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><strong>Product</strong></li>
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
                                    <h3 class="card-title">Product List</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($products as $data)
                                    <div class="col-12 col-md-2 my-2">
                                        <div class="card rounded-partner h-100">
                                            <div class="card-body">
                                                <div class="col-12">
                                                    <button type="button" class="btn float-right" did="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        {{-- <button class="dropdown-item" type="button" data-toggle="modal"
                                                            data-target="#editProduct{{ $data->id }}">Edit</button> --}}
                                                        <button class="dropdown-item"
                                                            onclick="deleteProduct({{ $data->id }})">Hapus</button>
                                                        <form id="delete-form-{{ $data->id }}"
                                                            action="{{ route('product.destroy', $data->id) }}"
                                                            method="POST" style="display: none;">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </div>
                                                </div>
                                                <img src="{{ asset('storage/' . $data->logo) }}" alt="{{ $data->name }}"
                                                    class="w-100">
                                            </div>
                                            <div class="card-footer text-center rounded-partner">
                                                {{ $data->name }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-12 col-md-2 my-2 ">
                                    <div class="card rounded-partner h-100">
                                        <div class="card-body">
                                            <button type="button" data-toggle="modal" data-target="#addProduct"
                                                class="btn w-100 h-100 text-primary">
                                                <i class="fa-solid fa-plus"></i><br>
                                                Tambah
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Add Product-->
    <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductLabel">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="mb-0 form-label col-form-label-sm">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Enter product name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="pic" class="mb-0 form-label col-form-label-sm">PIC</label>
                            <select class="form-control pic_id select2 @error('pic_id') is-invalid @enderror"
                                multiple="multiple" style="width: 100%;" id="pic_id" name="pic_id[]">
                                @foreach ($users as $user)
                                    @if (old('pic_id'))
                                        <option value="{{ $user->id }}"
                                            {{ in_array($user->id, old('pic_id')) ? 'selected' : '' }}>
                                            {{ $user->username }}</option>
                                    @else
                                        <option value="{{ $user->id }}">{{ $user->username }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('pic_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="logo" class="mb-0 form-label col-form-label-sm">Logo</label>
                            <small class="text-danger">*Logo ratio 1:1</small>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('logo') is-invalid @enderror"
                                    id="logo" name="logo">
                                @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="custom-file-label" for="logo">Choose
                                    file</label>
                            </div>

                            <label for="desc" class="mt-3 mb-0 form-label col-form-label-sm">Description</label>
                            <textarea class="form-control @error('desc') is-invalid @enderror" rows="4" placeholder="Enter description..."
                                id="desc" name="desc">{{ old('desc') }}</textarea>
                            @error('desc')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary rounded-partner">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Product-->
    {{-- @foreach ($products as $data)
        <div class="modal fade" id="editProduct{{ $data->id }}" tabindex="-1" aria-labelledby="editProductLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProductLabel">Edit Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('product.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="mb-0 form-label col-form-label-sm">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Enter product name"
                                    value="{{ $data->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="pic_id_edit" class="mb-0 form-label col-form-label-sm">PIC</label>
                                <select class="form-control team select2 @error('pic_id_edit') is-invalid @enderror"
                                    multiple="multiple" style="width: 100%;" id="pic_id_edit" name="pic_id_edit[]">
                                    @php
                                        $pic = explode(',', $data->pic);
                                    @endphp
                                    @foreach ($users as $user)
                                        @if (count($pic) > 1)
                                            <option
                                                @foreach ($pic as $team)
                                                    {{ $team == $user->id ? 'selected' : '' }} @endforeach
                                                value="{{ $user->id }}">{{ $user->username }}</option>
                                        @else
                                            <option {{ $data->pic_id == $user->id ? 'selected' : '' }}
                                                value="{{ $user->id }}">{{ $user->username }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('pic_id_edit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="logo" class="mb-0 form-label col-form-label-sm">Logo</label>
                                <small class="text-danger">*Logo ratio 1:1</small>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('logo') is-invalid @enderror"
                                        id="logo" name="logo">
                                    @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label class="custom-file-label" for="logo">Choose
                                        file</label>
                                </div>

                                <label for="desc" class="mt-3 mb-0 form-label col-form-label-sm">Description</label>
                                <textarea class="form-control @error('desc') is-invalid @enderror" rows="4" placeholder="Enter description..."
                                    id="desc" name="desc">{{ $data->desc }}</textarea>
                                @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning rounded-partner">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach --}}
@endsection

@push('scripts')
    <script type="text/javascript">
        function deleteProduct(id) {
            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: false,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Delete'
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-' + id).submit();
                } else if (
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe !',
                        'error'
                    )
                }
            })
        }
    </script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.pic_id').select2({
                placeholder: "Select PIC",
                allowClear: true,
                tags: true
            })
            $('.pic_id_edit').select2({
                placeholder: "Select PIC",
                allowClear: true,
                tags: true
            })

            $('input[type="file"]').change(function(e) {
                var fileName = e.target.files[0].name;
                $('.custom-file-label').html(fileName);
            });
        })
    </script>
@endpush
