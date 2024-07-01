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
                        <div class="card-body">
                            <div class="row">
                                @foreach ($clients as $data)
                                    <div class="col-6 col-md-2 my-2">
                                        <div class="card rounded-partner h-100">
                                            <div class="card-body">
                                                <div class="col-12">
                                                    <button type="button" class="btn float-right" did="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <button class="dropdown-item" type="button" data-toggle="modal"
                                                            data-target="#editClient{{ $data->id }}">Edit</button>
                                                        <button class="dropdown-item"
                                                            onclick="deleteClient({{ $data->id }})">Hapus</button>
                                                        <form id="delete-form-{{ $data->id }}"
                                                            action="{{ route('client.destroy', $data->id) }}" method="POST"
                                                            style="display: none;">
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
                                <div class="col-6 col-md-2 my-2">
                                    <div class="card rounded-partner h-100 w-100">
                                        <div class="card-body">
                                            <button type="button" data-toggle="modal" data-target="#addClient"
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

    <!-- Modal Add Client-->
    <div class="modal fade" id="addClient" tabindex="-1" aria-labelledby="addClientLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addClientLabel">Add New Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="mb-0 form-label col-form-label-sm">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Enter client name" value="{{ old('name') }}">
                            @error('name')
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

                            <label for="year" class="mb-0 form-label col-form-label-sm">Year</label>
                            <input type="number" class="form-control @error('year') is-invalid @enderror" id="year"
                                name="year" placeholder="Enter start year" value="{{ old('year') }}"
                                min="2010" max="2100">
                            @error('year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

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

    <!-- Modal Edit Client-->
    @foreach ($clients as $data)
        <div class="modal fade" id="editClient{{ $data->id }}" tabindex="-1" aria-labelledby="editClientLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editClientLabel">Edit Client</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('client.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="mb-0 form-label col-form-label-sm">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Enter client name"
                                    value="{{ $data->name }}">
                                @error('name')
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
                                    <label class="custom-file-label" for="logo">{{ $data->logo }}</label>
                                </div>

                                <label for="year" class="mb-0 form-label col-form-label-sm">Year</label>
                                <input type="number" class="form-control @error('year') is-invalid @enderror"
                                    id="year" name="year" placeholder="Enter start year"
                                    value="{{ $data->start_from }}" min="2010" max="2100">
                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

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
    @endforeach
@endsection

@push('scripts')
    <script type="text/javascript">
        function deleteClient(id) {
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

    <!-- Tahun -->
    <script>
        document.querySelector("input[type=number]")
            .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
    </script>
@endpush
