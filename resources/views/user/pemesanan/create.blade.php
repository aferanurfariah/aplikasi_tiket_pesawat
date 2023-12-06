@extends('adminlte.master')
@section('title','Rute')
@section('content')
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Rute</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Rute</li>
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
              <form action="{{ route('rute.store') }}" method="POST">
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
                        <label>Tujuan</label>
                        <select class="form-control select2" style="width: 100%;" name="tempat_pemesanan">
                          <option selected disabled></option>
                          <option>Traveling</option>
                          <option>Mudik</option>
                        </select>
                      </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="rute_awal">Rute Awal</label>
                    <input type="text" class="form-control" name="rute_awal" id="rute_awal" placeholder="Masukan rute">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="rute_akhir">Rute Akhir</label>
                        <input type="text" class="form-control" name="rute_akhir" id="rute_akhir" placeholder="Masukan rute">
                      </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukan harga">
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
