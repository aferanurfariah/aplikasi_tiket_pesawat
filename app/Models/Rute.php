<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pemesanan;
use App\Models\Pesawat;

class Rute extends Model
{
    use HasFactory;
    protected $table = 'rutes';
    protected $fillable = [
        'pesawat_id',
        'tujuan',
        'rute_awal',
        'rute_akhir',
        'harga'

    ];

    public function pemesanan()
    {
        return $this->hasOne(Pemesanan::class, 'id', 'pemesanan_id');
    }

    public function pesawat()
    {
        return $this->hasOne(Pesawat::class, 'id', 'pesawat_id');
    }


}
