<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pesawat;

class Pesawat extends Model
{
    use HasFactory;
    protected $table = 'pesawats';

    protected $fillable = [
        'kode_pesawat',
        'nama_maskapai',
        'jumlah_kursi_pesawat',
        'keterangan'
    ];

    public function Rute()
    {
        return $this->BelongsTo(Rute::class, 'id', 'rute_id');
    }
}
