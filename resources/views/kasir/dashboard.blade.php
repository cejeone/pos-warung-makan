@extends('layouts.master')

@section('title')
    Beranda
@endsection

@section('content')
    {{-- <div class="row">
        <div class="col-12">
            <div class="bg-menu">
                <h4 class="text-center"><i
                        class="fas fa-calendar-alt">&nbsp;&nbsp;</i>{{ tanggal_indonesia($tanggal_akhir, false) }}
                </h4>
            </div>
        </div>
    </div> --}}
    <div class="bg-menu">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-body text-center">
                        <h1>Selamat Datang</h1>
                        <h2>Anda login sebagai KASIR</h2>
                        <br><br>
                        <a href="{{ route('transaksi.baru') }}" class="btn btn-pilih">Menu Order</a>
                        <br><br><br>
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
