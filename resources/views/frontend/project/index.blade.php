@extends('frontend.layout.app')

@section('title')
    Our Project References
@endsection

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
@endpush

@section('content')
    <!-- Judul -->
    <section class="container_border">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    <h1><strong>Our Projects References</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Judul -->
    <section class="s-line-hr-top" style="min-height: 70svh;background-color: #fff">
        <div class="container">
            <div class="col-12 pt-3">
                <table id="ProjectTable" class="table table-bordered table-striped text-sm w-100">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 5%">
                                No
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
                        </tr>
                    </thead>
                    <tbody class="text-left text-uppercase">
                        @foreach ($projects as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->company }}</td>
                                <td>{{ $data->year }}</td>
                                <td>{{ $data->desc }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

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
    </script>
@endpush
