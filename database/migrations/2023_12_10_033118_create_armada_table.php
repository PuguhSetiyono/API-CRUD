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
        Schema::create('armada', function (Blueprint $table) {
            $table->id('id_armada');
            $table->string('nama_armada')->notNullable();
            $table->integer('kapasitas_angkut')->nullable();
            $table->string('status', 50)->nullable();
            $table->decimal('harga', 10, 2)->nullable(); // Menambahkan kolom harga dengan tipe data decimal dan default value nullable
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
        Schema::dropIfExists('armada');
    }
};
