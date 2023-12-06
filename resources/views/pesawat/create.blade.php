@extends('adminlte.master')
@section('title','pesawat')
@section('content')
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pesawat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pesawat</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">From Pesawat</h3>
              <form action="{{ route('pesawat.store') }}" method="POST">
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
                    <label for="kode_pesawat">Kode Pesawat</label>
                    <input type="text" class="form-control" name="kode_pesawat" id="kode_pesawat" placeholder="Masukan kode">
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Nama Maskapai</label>
                    <select class="form-control select2" style="width: 100%;" name="nama_maskapai">
                      <option selected disabled></option>
                      <option>Garuda Indonesia</option>
                      <option>Lion Air</option>
                      <option>Batik Air</option>
                      <option>Sriwijaya Air</option>
                      <option>Citylink</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jumlah Kursi Pesawat</label>
                        <select class="form-control select2" style="width: 100%;" name="jumlah_kursi_pesawat">
                          <option selected disabled></option>
                          <option>GRA 400 SEAT</option>
                          <option>LA 345 SEAT</option>
                          <option>BA 455 SEAT</option>
                          <option>SA 635 SEAT</option>
                          <option>CL 895 SEAT</option>
                        </select>
                      </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukan keterangan">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

                  <!-- /.form-group -->
              </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->


                <!-- /.form-group -->
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </form>
    </div>
    </div>
  </section>
@endsection
