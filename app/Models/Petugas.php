<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pemesanan;

class Petugas extends Model
{
    use HasFactory;

    protected $fillable =  [
        'status'
    ];


    public function Pemesanan()
    {
        return $this->hasOne(Pemesanan::class, 'id', 'pemesanan_id');
    }
}
