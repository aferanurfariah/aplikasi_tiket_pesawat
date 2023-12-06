@extends('adminlte.master')

@section('title', 'penumpang')


@section('content')

@push('css')
<link rel="stylesheet" href="{{ asset('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush


<!-- Main content -->

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="m-0">From Penumpang</h1>
                </div><!-- /.col -->
                <div class="col-md-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Penumpang</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-light">
                        <div class="card-header">
                            <h3 class="card-title">Table Penumpang</h3>
                        </div>
                        <!-- /.card-header -->
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>nama penumpang</th>
                                    <th>alamat penumpang</th>
                                    <th>tanggal lahir</th>
                                    <th>jenis kelamin</th>
                                    <th>no. telepon</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($penumpang as $key => $value)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->nama_penumpang}}</td>
                                    <td>{{ $value->alamat_penumpang }}</td>
                                    <td>{{ $value->tanggal_lahir }}</td>
                                    <td>{{ $value->jenis_kelamin }}</td>
                                    <td>{{ $value->no_telepon }}</td>

                                    <td>
                                        <form action="{{ route('penumpang.destroy', $value->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <a href="{{ route('penumpang.show', $value->id) }}" class="btn-sm btn-info">Show</a>
                                        <a href="{{ route('penumpang.edit', $value->id) }}" class="btn-sm btn-warning">Edit</a>
                                        <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>

                                @empty
                                <tr>
                                    <td>Data Masih Kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div>
                            <a href="{{ route('penumpang.create')}}" class="btn btn-sm btn-danger m-2">Tambah Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->


@endsection


@push('script')
<script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('template/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('template/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endpush
