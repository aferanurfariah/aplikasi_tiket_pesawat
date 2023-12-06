<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penumpang;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanans';

    protected $fillable = [
        'penumpangs_id',
        'rute_id',
        'kode_pemesanan',
        'jumlah_kursi_pemesanan',
        'tanggal_berangkat',
        'tempat_pemesanan',
        'kelas_maskapai',
        'boarding_pass',
        'total_bayar',
        'tujuan',
        'take_off'

    ];

    public function penumpang()
    {
        return $this->belongsTo(Penumpang::class, 'id', 'penumpang_id');
    }

    public function petugas()
    {
        return $this-hasMany(Petugas::class, 'id', 'petugas_id');
    }

    public function rute()
    {
        return $this->hasOne(Rute::class, 'id', 'rute_id');
    }
}
