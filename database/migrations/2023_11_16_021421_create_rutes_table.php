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
        Schema::create('rutes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pesawat_id');
            $table->foreign('pesawat_id')->references('id')->on('pesawats'); 
            $table->string('tujuan');
            $table->string('rute_awal');
            $table->string('rute_akhir');
            $table->string('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutes');
    }
};
