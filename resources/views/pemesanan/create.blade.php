@extends('adminlte.master')
@section('title','pemesanan')
@section('content')
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pemesanan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pemesanan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">From Pemesanan</h3>
              <form action="{{ route('pemesanan.store') }}" method="POST">
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
                        <label for="penumpang">Penumpang</label>
                        <select name="penumpangs_id" id="penumpang" class="form-control">
                          <option disabled selected>-- Pilih Salah Satu--</option>
                          @forelse ($penumpang as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_penumpang }}</option>
                          @empty
                            <option>--- Data Penumpang kosong ---</option>
                          @endforelse
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="penumpang">Id_Rute</label>
                        <select name="rute_id" id="penumpang" class="form-control">
                          <option disabled selected>-- Pilih Salah Satu--</option>
                          @forelse ($rute as $item)
                            <option value="{{ $item->id }}">{{ $item->tujuan }}</option>
                          @empty
                            <option>--- Data Penumpang kosong ---</option>
                          @endforelse
                        </select>
                    </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="jumlah_kursi_pemesanan">Jumlah Kursi Pemesanan</label>
                    <input type="text" class="form-control" name="jumlah_kursi_pemesanan" id="jumlah_kursi_pemesanan" placeholder="Masukan Jumlah">
                  </div>
                  <div class="form-group">
                    <label for="tanggalberangkat">Tanggal Berangkat</label>
                    <input type="date" class="form-control" name="tanggal_berangkat" id="tanggallahir" placeholder="Masukkan Tanggal" value="{{ old('tanggal_berangkat') }}">
                  </div>
                  <div class="form-group">
                    <label>Tempat Pemesanan</label>
                    <select class="form-control select2" style="width: 100%;" name="tempat_pemesanan">
                      <option selected disabled></option>
                      <option>Jakarta JKT</option>
                      <option>Bandung BDG</option>
                      <option>Surabaya</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Kelas Maskapai</label>
                    <select class="form-control select2" style="width: 100%;" name="kelas_maskapai">
                      <option selected disabled></option>
                      <option>Businnes</option>
                      <option>Ekonomi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Boarding Pass</label>
                    <select class="form-control select2" style="width: 100%;" name="boarding_pass">
                      <option selected disabled></option>
                      <option>01.00</option>
                      <option>02.00</option>
                      <option>03.00</option>
                      <option>04.00</option>
                      <option>05.00</option>
                      <option>06.00</option>
                      <option>07.00</option>
                      <option>08.00</option>
                      <option>09.00</option>
                      <option>10.00</option>
                      <option>11.00</option>
                      <option>12.00</option>
                      <option>13.00</option>
                      <option>14.00</option>
                      <option>15.00</option>
                      <option>16.00</option>
                      <option>17.00</option>
                      <option>18.00</option>
                      <option>19.00</option>
                      <option>20.00</option>
                      <option>21.00</option>
                      <option>22.00</option>
                      <option>23.00</option>
                      <option>00.00</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="total_bayar">Total Bayar</label>
                    <input type="text" class="form-control" name="total_bayar" id="total_bayar">
                </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kode_pemesanan">Kode Pemesanan</label>
                        <input type="text" class="form-control" name="kode_pemesanan" id="kode_pemesanan" placeholder="Masukan kode">
                      </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Tujuan</label>
                    <select class="form-control select2" style="width: 100%;" name="tujuan">
                      <option selected disabled></option>
                      <option>Denpasar Bali</option>
                      <option>Papua</option>
                      <option>Makasar</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Take Offf</label>
                    <select class="form-control select2" style="width: 100%;" name="take_off">
                      <option selected disabled></option>
                      <option>01.00</option>
                      <option>02.00</option>
                      <option>03.00</option>
                      <option>04.00</option>
                      <option>05.00</option>
                      <option>06.00</option>
                      <option>07.00</option>
                      <option>08.00</option>
                      <option>09.00</option>
                      <option>10.00</option>
                      <option>11.00</option>
                      <option>12.00</option>
                      <option>13.00</option>
                      <option>14.00</option>
                      <option>15.00</option>
                      <option>16.00</option>
                      <option>17.00</option>
                      <option>18.00</option>
                      <option>19.00</option>
                      <option>20.00</option>
                      <option>21.00</option>
                      <option>22.00</option>
                      <option>23.00</option>
                      <option>00.00</option>
                    </select>
                </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->


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
