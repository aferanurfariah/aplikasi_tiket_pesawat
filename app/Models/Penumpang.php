<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pemesanans;

class Penumpang extends Model
{
    use HasFactory;
    protected $table = 'penumpangs';

    protected $fillable = [
        'nama_penumpang',
        'alamat_penumpang',
        'tanggal_lahir',
        'jenis_kelamin',
        'no_telepon',
    ];

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id', 'pemesanan_id');
    }
}
