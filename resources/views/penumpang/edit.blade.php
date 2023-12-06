@extends('adminlte.master')

@push('css')

@endpush

@section('content')
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Penumpang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('penumpang.update' , $penumpang->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_penumpang">Nama Penumpang</label>
                    <input type="text" name="nama_penumpang" id="nama_penumpang" class="form-control @error('nama') is-invalid @enderror"  placeholder="Masukkan Nama" value="{{ $penumpang->nama_penumpang }}">
                  </div>
                  @error('nama_penumpang')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="alamat_penumpang">Alamat Penumpang</label>
                    <input type="text" name="alamat_penumpang" id="alamat_penumpang" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan Alamat" value="{{ $penumpang->alamat_penumpang }}">
                  </div>
                  @error('alamat_penumpang')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" placeholder="Masukkan Tanggal" value="{{ $penumpang->tanggal_penumpang }}">
                  </div>
                  @error('tanggal_lahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                      <div class="form-check">
                        <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror"  type="radio" name="jenis_kelamin" value="{{ $penumpang->jenis_kelamin }}">
                        <label class="form-check-label" checked>{{ $penumpang->jenis_kelamin }}</label>
                      </div>
                  </div>
                  @error('jenis_kelamin')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                      <label for="no_telepon">No. Telepon</label>
                      <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" id="no_telepon" placeholder="Masukkan No.Telepon" value="{{ $penumpang->no_telepon }}">
                  </div>
                  @error('no_telepon')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Submit</button>
                  <a href="{{ route('penumpang.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>

@endsection
