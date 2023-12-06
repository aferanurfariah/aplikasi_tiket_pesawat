<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penumpangs_id');
            $table->foreign('penumpangs_id')->references('id')->on('penumpangs');
            $table->unsignedBigInteger('rute_id');
            $table->foreign('rute_id')->references('id')->on('rutes');
            $table->string('kode_pemesanan');
            $table->string('jumlah_kursi_pemesanan');
            $table->string('tanggal_berangkat');
            $table->string('tempat_pemesanan');
            $table->string('kelas_maskapai');
            $table->string('boarding_pass');
            $table->string('total_bayar');
            $table->string('tujuan');
            $table->string('take_off');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
