@extends('layouts.master')

@section('title')
    Daftar Kategori
@endsection

@section('breadcrumb')
    @parent
    <li><i class="fas fa-angle-double-right"></i></li>
    <li class="active">Daftar kategori</li>
@endsection

@section('content')
    <div class="bg-menu d-block">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header with-border mb-3">
                        <button onclick="addForm('{{ route('kategori.store') }}')" class="btn btn-tambah"><i
                                class="fas fa-crud fa-plus-circle"></i></button>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-stiped table-bordered">
                            <thead>
                                <th width="5%">No</th>
                                <th>Kategori</th>
                                <th width="15%"><i class="fa fa-cog"></i></th>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @includeIf('kategori.form')
@endsection

@push('css')
    <style>
        .sidebar-nd .menu .item.active.kategori {
            border-radius: 10px;
        }

        .sidebar-nd .menu .item.active.kategori p a {
            color: black;
            font-weight: 700;
            text-decoration: none;
            background-color: #aef261;
            border-radius: 10px;
        }

    </style>
@endpush

@push('scripts')
    <script>
        let table;

        $(function() {
            table = $('.table').DataTable({
                processing: true,
                autoWidth: false,
                ajax: {
                    url: '{{ route('kategori.data') }}',
                },
                columns: [{
                        data: 'DT_RowIndex',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'nama_kategori'
                    },
                    {
                        data: 'aksi',
                        searchable: false,
                        sortable: false
                    },
                ]
            });

            $('#modal-form').validator().on('submit', function(e) {
                if (!e.preventDefault()) {
                    $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                        .done((response) => {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                        })
                        .fail((errors) => {
                            alert('Tidak dapat menyimpan data');
                            return;
                        });
                }
            });
        });

        function addForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Tambah Kategori');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('post');
            $('#modal-form [name=nama_kategori]').focus();
        }

        function editForm(url) {
            $('#modal-form').modal('show');
            $('#modal-form .modal-title').text('Edit Kategori');

            $('#modal-form form')[0].reset();
            $('#modal-form form').attr('action', url);
            $('#modal-form [name=_method]').val('put');
            $('#modal-form [name=nama_kategori]').focus();

            $.get(url)
                .done((response) => {
                    $('#modal-form [name=nama_kategori]').val(response.nama_kategori);
                })
                .fail((errors) => {
                    alert('Tidak dapat menampilkan data');
                    return;
                });
        }

        function deleteData(url) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                $.post(url, {
                        '_token': $('[name=csrf-token]').attr('content'),
                        '_method': 'delete'
                    })
                    .done((response) => {
                        table.ajax.reload();
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menghapus data');
                        return;
                    });
            }
        }
    </script>
@endpush
