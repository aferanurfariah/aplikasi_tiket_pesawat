@extends('adminlte.master')

@push('css')

@endpush

@section('content')
            <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Penumpang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Penumpang</li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
            </section>
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Show Data Penumpang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaPenumpang">Nama Penumpang</label>
                    <input type="text" name="nama_penumpang" id="namaPenumpang" class="form-control" placeholder="Masukkan Nama Penumpang" value="{{ $penumpang->nama_penumpang }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="alamat_penumpang">Alamat Penumpang</label>
                    <input type="text" name="alamat_penumpang" id="alamat_anggota" class="form-control" placeholder="Masukkan Alamat Penumpang" value="{{ $penumpang->alamat_penumpang }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="tanggallahir">Tanggal Lahir</label>
                    <input type="date" name="Tanggal Lahir" id="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{ $penumpang->tanggal_lahir }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" id="jeniskelamin" class="form-control" placeholder="Masukkan Jenis Kelamin" value="{{ $penumpang->jenis_kelamin }}" disabled>
                  </div>
                  <div class="form-group">
                      <label for="no_telepon">No. Telepon</label>
                      <input type="text" class="form-control" name="no_telepon" id="no_telepon" placeholder="Masukkan No. Telepon" value="{{ $penumpang->no_telepon }}"disabled>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>

                <div class="card-footer">
                  <a href="{{ route('penumpang.index') }}" class="btn btn-danger"><i class="fas fa-close"></i>Back</a>
                </div>

            @endsection
