@extends('layouts.master')

@section('title')
    Laporan Pendapatan {{ tanggal_indonesia($tanggalAwal, false) }} s/d {{ tanggal_indonesia($tanggalAkhir, false) }}
@endsection

@push('css')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('breadcrumb')
    @parent
    <li><i class="fas fa-angle-double-right"></i></li>
    <li class="active">Laporan pendapatan</li>
@endsection

@section('content')
    <div class="bg-menu">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                        <button onclick="updatePeriode()" class="btn btn-simpan"><i class="fa fa-plus-circle"></i>
                            Ubah Periode</button>
                        <a href="{{ route('laporan.export_pdf', [$tanggalAwal, $tanggalAkhir]) }}" target="_blank"
                            class="btn btn-simpan"><i class="fas fa-file-excel"></i> Export PDF</a>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-stiped table-bordered">
                            <thead>
                                <th width="5%">No</th>
                                <th>Tanggal</th>
                                <th>Penjualan</th>
                                <th>Pengeluaran</th>
                                <th>Pendapatan</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @includeIf('laporan.form')
@endsection

@push('css')
    <style>
        .sidebar-nd .menu .item.active.laporan {
            border-radius: 10px;
        }

        .sidebar-nd .menu .item.active.laporan p a {
            color: black;
            font-weight: 700;
            text-decoration: none;
            background-color: #aef261;
            border-radius: 10px;
        }

    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let table;

        $(function() {
            table = $('.table').DataTable({
                processing: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('laporan.data', [$tanggalAwal, $tanggalAkhir]) }}',
                },
                columns: [{
                        data: 'DT_RowIndex',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'tanggal'
                    },
                    {
                        data: 'penjualan'
                    },
                    {
                        data: 'pengeluaran'
                    },
                    {
                        data: 'pendapatan'
                    }
                ],
                dom: 'Brt',
                bSort: false,
                bPaginate: false,
            });

            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
        });

        function updatePeriode() {
            $('#modal-form').modal('show');
        }
    </script>
@endpush
