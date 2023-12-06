@extends('adminlte.master')
@section('title','penumpang')
@section('content')
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Penumpang</h1>
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

  <section class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">From Penumpang</h3>
              <form action="{{ route('penumpang.store') }}" method="POST">
                @csrf
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama_penumpang">Nama Penumpang</label>
                    <input type="text" class="form-control" name="nama_penumpang" id="nama_penumpang" placeholder="Masukan nama">
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>No. Telepon</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="number" class="form-control" name="no_telepon" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan angka">
                    </div>
                </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="tanggallahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggallahir" placeholder="Masukkan Tanggal" value="{{ old('tanggal_lahir') }}">
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control select2" style="width: 100%;" name="jenis_kelamin">
                      <option selected="selected">masukan jenis kelamin</option>
                      <option>Perempuan</option>
                      <option>Laki Laki</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="form-group">
                        <label>Alamat Penumpang</label>
                        <textarea class="form-control" rows="3" name="alamat_penumpang" placeholder="Masukan alamat"></textarea>
                    </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit">
                <a href="{{ route('pemesanan.create')}}" class="btn btn-sm btn-danger">Submit</a>
            </button>
            </div>
        </div>
    </form>
    </div>
    </div>
  </section>
@endsection
