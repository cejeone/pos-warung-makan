@extends('layouts.master')

@section('title')
    Pengaturan
@endsection

@section('breadcrumb')
    @parent
    <li><i class="fas fa-angle-double-right"></i></li>
    <li class="active">Pengaturan</li>
@endsection

@section('content')
    <div class="menu-pengaturan">
        <div class="row">
            <div class="col-3">
                <a href="{{ route('user.index') }}" class="pengaturan d-block">
                    <i class="fas fa-users-cog"></i>
                    <p>Pengguna</p>
                </a>
            </div>
            <div class="col-3">
                <a href="{{ route('setting.index') }}" class="pengaturan d-block">
                    <i class="fas fa-cog"></i>
                    <p>Edit profil</p>
                </a>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .sidebar-nd .menu .item.active.pengaturan {
            border-radius: 10px;
        }

        .sidebar-nd .menu .item.active.pengaturan p a {
            color: black;
            font-weight: 700;
            text-decoration: none;
            background-color: #aef261;
            border-radius: 10px;
        }

    </style>
@endpush
