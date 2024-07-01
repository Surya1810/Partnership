@extends('backend.layout.app')

@section('title')
    Text
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
                    <h1>Text</h1>
                    <ol class="breadcrumb text-black-50">
                        <li class="breadcrumb-item"><a class="text-black-50" href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><strong>Text</strong></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 d-flex align-items-stretch">
                    <div class="card card-outline rounded-partner card-primary w-100">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3 class="card-title">About Us</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            @isset($about->content)
                                <h1>
                                    "{{ $about }}"
                                </h1>
                            @else
                                <small>Belum Ada</small>
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex align-items-stretch">
                    <div class="card card-outline rounded-partner card-primary w-100">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3 class="card-title">Tagline</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            @isset($tagline->content)
                                <h3>
                                    "{{ $tagline->content }}"
                                </h3>
                            @else
                                <small>Belum Ada</small>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 d-flex align-items-stretch">
                    <div class="card card-outline rounded-partner card-primary w-100">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3 class="card-title">Rekening</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="RekeningTable" class="table table-bordered text-sm">
                                <thead class="table-dark">
                                    <tr>
                                        <th>
                                            Bank
                                        </th>
                                        <th>
                                            No. Rekening
                                        </th>
                                        <th>
                                            Atas Nama
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rekening as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->company }}</td>
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
                <div class="col-12 col-md-4 d-flex align-items-stretch">
                    <div class="card card-outline rounded-partner card-primary w-100">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3 class="card-title">Contact</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="ContactTable" class="table table-bordered text-sm">
                                <thead class="table-dark">
                                    <tr>
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Nomor
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contact as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->company }}</td>
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
                <div class="col-12 col-md-4 d-flex align-items-stretch">
                    <div class="card card-outline rounded-partner card-primary w-100">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3 class="card-title">Sosial Media</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <table id="SosmedTable" class="table table-bordered text-sm">
                                <thead class="table-dark">
                                    <tr>
                                        <th>
                                            Sosmed
                                        </th>
                                        <th>
                                            Link
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contact as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->company }}</td>
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
            $('#RekeningTable').DataTable({
                "paging": false,
                'processing': true,
                "lengthChange": true,
                "searching": false,
                "ordering": false,
                "info": false,
                "autoWidth": false,
                "responsive": true,
            });
            $('#ContactTable').DataTable({
                "paging": false,
                'processing': true,
                "lengthChange": true,
                "searching": false,
                "ordering": false,
                "info": false,
                "autoWidth": false,
                "responsive": true,
            });
            $('#SosmedTable').DataTable({
                "paging": false,
                'processing': true,
                "lengthChange": true,
                "searching": false,
                "ordering": false,
                "info": false,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
