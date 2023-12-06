@extends('adminlte.master')
@section('title')
    Cari Tiket
@endsection

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Pemesanan Ticket</strong></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Cari Tiket</li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <div class="content">
        <div class="container-fluid">
            @forelse ($pemesanans as $value)
            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead"><b>{{ $value->kode_pemesanan }}</b></h2>
                                <p class="text-muted text-sm"><b>Tempat Pemesanan: </b> {{ $value->tempat_pemesanan }} </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-pen"></i></span> <b>Kelas Maskapai:</b> {{ $value->kelas_maskapai }}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <b>Jumlah Kursi:</b> {{ $value->jumlah_kursi }}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> <b>Tujuan:</b> {{ $value->tujuan }}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> <b>Tanggal Berangkat:</b> {{ $value->tanggal_berangkat }}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> <b>Boarding Pass:</b> {{ $value->boarding_pass }}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> <b>Take Off:</b> {{ $value->take_off }}</li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> <b>Total Bayar:</b> {{ $value->total_bayar }}</li>
                                </ul>
                            </div>
                            <div class="col-5 text-right">
                                <img src="{{ asset('template/dist/img/user1-128x128.jpg')}}" alt="user-avatar" class="img-circle img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-left">
                            <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                            </a>
                                <a href="{{ route('book.show', $value->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-book"></i>&ensp; Detail Buku
                            </a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            @empty
                <li>
                    <br>
                    <p class="text-danger"><strong>Data Masih Kosong</strong></p>
                </li>
            @endforelse
        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
