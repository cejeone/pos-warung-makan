@extends('layouts.master')

@section('title')
    Transaksi
@endsection

@section('breadcrumb')
    @parent
    <li><i class="fas fa-angle-double-right"></i></li>
    <li class="active">Transaksi</li>
@endsection

@section('content')
    <div class="menu-pengaturan">
        <div class="row">
            <div class="col-3">
                <a href="{{ route('penjualan.index') }}" class="pengaturan d-block">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <p>Penjualan</p>
                </a>
            </div>
            <div class="col-3">
                <a href="{{ route('pengeluaran.index') }}" class="pengaturan d-block">
                    <i class="fas fa-receipt"></i>
                    <p>Pengeluaran</p>
                </a>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .sidebar-nd .menu .item.active.transaksi {
            border-radius: 10px;
        }

        .sidebar-nd .menu .item.active.transaksi p a {
            color: black;
            font-weight: 700;
            text-decoration: none;
            background-color: #aef261;
            border-radius: 10px;
        }

    </style>
@endpush
