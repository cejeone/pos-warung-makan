@extends('layouts.master')

@section('title')
    Beranda
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="card db">
                <div class="card-body">
                    <h1>{{ $kategori }}</h1>
                    <p class="card-text">Total kategori</p>
                </div>
                <div class="card-footer card-ft">
                    <a href="{{ route('kategori.index') }}" class="btn btn-db">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card db">
                <div class="card-body">
                    <h1>{{ $produk }}</h1>
                    <p class="card-text">Total Produk</p>
                </div>
                <div class="card-footer card-ft">
                    <a href="{{ route('produk.index') }}" class="btn btn-db">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card db">
                <div class="card-body">
                    <h1>{{ $member }}</h1>
                    <p class="card-text">Total member</p>
                </div>
                <div class="card-footer card-ft">
                    <a href="{{ route('member.index') }}" class="btn btn-db">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="bg-menu mt-5">
                <div class="pengaturan d-block">
                    <h5 class="box-title text-center">Grafik Pendapatan {{ tanggal_indonesia($tanggal_akhir, false) }}
                    </h5>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="chart">
                                    <canvas id="salesChart" style="height: 180px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .sidebar-nd .menu .item.active.dashboard {
            border-radius: 10px;
        }

        .sidebar-nd .menu .item.active.dashboard p a {
            color: black;
            font-weight: 700;
            text-decoration: none;
            background-color: #aef261;
            border-radius: 10px;
        }

    </style>
@endpush

@push('scripts')
    <!-- ChartJS -->
    <script src="{{ asset('frontend/vendor/chart.js/Chart.js') }}"></script>
    <script>
        $(function() {
            // Get context with jQuery - using jQuery's .get() method.
            var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
            // This will get the first returned node in the jQuery collection.
            var salesChart = new Chart(salesChartCanvas);

            var salesChartData = {
                labels: {{ json_encode($data_tanggal) }},
                datasets: [{
                    label: 'Pendapatan',
                    fillColor: '#aef261',
                    strokeColor: '#aef261;',
                    pointColor: '#aef261',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: {{ json_encode($data_pendapatan) }}
                }]
            };

            var salesChartOptions = {
                pointDot: false,
                responsive: true
            };

            salesChart.Line(salesChartData, salesChartOptions);
        });
    </script>
@endpush
