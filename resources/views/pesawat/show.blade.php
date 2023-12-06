@extends('adminlte.master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Maskapai</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Maskapai</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Maskapai</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
                <div class="form-group">
                  <label for="id">ID Anggota</label>
                  <input type="text" name="id" id="id" class="form-control" placeholder="Masukan Id" value="{{ $anggota[0]->id }}" disabled>
                </div>
                <div class="form-group">
                  <label for="kode_anggota">Kode Anggota</label>
                  <input type="text" name="kode" id="kode_anggota" class="form-control" placeholder="Masukan kode" value="{{ $anggota[0]->kode_anggota}}" disabled>
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama" value="{{ $anggota[0]->nama_anggota }}" disabled>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="custom-select" name="jk" id="jk" disabled value="{{ $anggota[0]->jk_anggota}}">
                        <option>LAKI LAKI</option>
                        <option>PEREMPUAN</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <select class="custom-select" name="jurusan" disabled value="{{ $anggota[0]->jurusan_anggota}}">
                        <option selected disabled>Pilih Jurusan</option>
                        <option>RPL</option>
                        <option>DPIB</option>
                        <option>TKJ</option>
                        <option>TKRO</option>
                        <option>TEI</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="number" class="form-control" name="tlp" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan Angka" disabled value="{{$anggota[0]->no_telp_anggota }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan alamat" disabled>{{$anggota[0]->alamat_anggota}}</textarea>
                </div>
            </div>
            <div class="crad-footer">
                <a href="/anggota"><button type="sumbit" class="btn btn-primary m-2">Kembali</button></a>
            </div>
              <!-- /.card-body -->

              {{-- <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div> --}}
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
