@extends('backend.layout.app')

@section('title')
    Project
@endsection

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project</h1>
                    <ol class="breadcrumb text-black-50">
                        <li class="breadcrumb-item"><a class="text-black-50" href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><strong>Project</strong></li>
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
                                    <h3 class="card-title">Project List</h3>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="float-right btn btn-sm btn-primary rounded-partner"
                                        data-toggle="modal" data-target="#addProject">
                                        <i class="fas fa-plus"></i> Tambah
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="ProjectTable" class="table table-bordered text-sm">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 5%">
                                            ID
                                        </th>
                                        <th>
                                            Nama Pekerjaan
                                        </th>
                                        <th>
                                            Instansi
                                        </th>
                                        <th>
                                            Tahun
                                        </th>
                                        <th>
                                            Keterangan
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->company }}</td>
                                            <td>{{ $data->year }}</td>
                                            <td>{{ $data->desc }}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-warning rounded-partner"
                                                    data-toggle="modal" data-target="#editProject{{ $data->id }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger rounded-partner"
                                                    onclick="deleteProject({{ $data->id }})"><i
                                                        class="fas fa-trash"></i></button>
                                                <form id="delete-form-{{ $data->id }}"
                                                    action="{{ route('project.destroy', $data->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
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

    <!-- Modal Add Project-->
    <div class="modal fade" id="addProject" tabindex="-1" aria-labelledby="addProjectLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProjectLabel">Add New Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="mb-0 form-label col-form-label-sm">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Enter project name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="company" class="mb-0 form-label col-form-label-sm">Authority</label>
                            <input type="text" class="form-control @error('company') is-invalid @enderror" id="company"
                                name="company" placeholder="Enter authority name" value="{{ old('company') }}">
                            @error('company')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="year" class="mb-0 form-label col-form-label-sm">Year</label>
                            <input type="number" class="form-control @error('year') is-invalid @enderror" id="year"
                                name="year" placeholder="Enter project year" value="{{ old('year') }}" min="2010"
                                max="2100">
                            @error('year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="form-group">
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
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary rounded-partner">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Project-->
    @foreach ($projects as $data)
        <div class="modal fade" id="editProject{{ $data->id }}" tabindex="-1" aria-labelledby="editProjectLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProjectLabel">Edit Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('project.update', $data->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="mb-0 form-label col-form-label-sm">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Enter project name"
                                    value="{{ $data->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="company" class="mb-0 form-label col-form-label-sm">Authority</label>
                                <input type="text" class="form-control @error('company') is-invalid @enderror"
                                    id="company" name="company" placeholder="Enter authority name"
                                    value="{{ $data->company }}">
                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="year" class="mb-0 form-label col-form-label-sm">Year</label>
                                <input type="number" class="form-control @error('year') is-invalid @enderror"
                                    id="year" name="year" placeholder="Enter project year"
                                    value="{{ $data->year }}" min="2010" max="2100">
                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <label for="desc"
                                        class="mt-3 mb-0 form-label col-form-label-sm">Description</label>
                                    <textarea class="form-control @error('desc') is-invalid @enderror" rows="4" placeholder="Enter description..."
                                        id="desc" name="desc">{{ $data->desc }}</textarea>
                                    @error('desc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
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
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/adminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/adminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/adminLTE/plugins/jszip/jszip.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/adminLTE/plugins/pdfmake/pdfmake.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/adminLTE/plugins/pdfmake/vfs_fonts.js') }}"></script> --}}
    <script src="{{ asset('assets/adminLTE/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/adminLTE/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/adminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            $('#ProjectTable').DataTable({
                "paging": true,
                'processing': true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                // "scrollX": true,
                // width: "700px",
                // columnDefs: [{
                //     className: 'dtr-control',
                //     orderable: false,
                //     targets: -8
                // }]
            });
        });

        function deleteProject(id) {
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

    <!-- Tahun -->
    <script>
        document.querySelector("input[type=number]")
            .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
    </script>
@endpush
