<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id('id_pemesanan');
            $table->foreignId('id_pelanggan');
            $table->foreignId('id_armada');
            $table->foreignId('id_sampah');
            $table->foreignId('id_lokasi');
            $table->date('tanggal_pemesanan');
            $table->string('alamat_pengambilan_sampah', 255);
            $table->string('status_pemesanan', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
};
