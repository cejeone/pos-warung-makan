@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="bg-menu">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-body text-center">
                        <h1>Selamat Datang</h1>
                        <h2>Anda login sebagai KASIR</h2>
                        <br><br>
                        <a href="{{ route('transaksi.baru') }}" class="btn btn-pilih">Menu order</a>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
