@extends('adminlte.master')

@push('css')

@endpush

@section('content')

            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Maskapai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('maskapai.update' , $maskapai->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="maskapai">Maskapai :</label>
                    <input type="text" name="id_maskapai" id="idmaskapai" class="form-control @error('id') is-invalid @enderror"  placeholder="Masukkan id" value="{{ $maskapai->id_maskapai }}">
                  </div>
                  @error('id_maskapai')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="kodeMaskapai">Kode Maskapai :</label>
                    <input type="text" name="kode_maskapai" id="kodemaskapai" class="form-control @error('kodemaskapai') is-invalid @enderror" placeholder="Masukkan kode" value="{{ $maskapai->kode_maskapai }}">
                  </div>
                  @error('kode_maskapai')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="namaMaskapai">Nama Maskapai :</label>
                    <input type="text" name="nama_maskapai" id="namamaskapai" class="form-control @error('namamaskapai') is-invalid @enderror" placeholder="Masukkan nama" value="{{ $maskapai->nama_maskapai }}">
                  </div>
                  @error('nama_maskapai')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="jumlahkursiMaskapai">Jumlah Kursi Maskapai :</label>
                    <input type="text" name="jumlah_kursi_maskapai" id="jumlahkursimaskapai" class="form-control @error('jumlahkursimaskapai') is-invalid @enderror" placeholder="Masukkan jumlah" value="{{ $maskapai->jumlah_kursi_maskapai }}">
                  </div>
                  @error('jumlah_kursi_maskapai')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="keterangan">Keterangan :</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Masukkan keterangan" value="{{ $maskapai->keterangan_maskapai }}">
                  </div>
                  @error('keterangan')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('maskapai.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>

@endsection
