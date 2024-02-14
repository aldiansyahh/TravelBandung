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
        Schema::create('tujuan', function (Blueprint $table) {
            $table->id('id_tujuan')->autoIncrement();
            $table->unsignedBigInteger('id_otlate');
            $table->foreign('id_otlate')->references('id_otlate')->on('otlate')->onDelete('cascade');
            $table->string('nama');
            $table->string('lokasi_tujuan');
            $table->string('urlImage');
            $table->string('deskripsi');
            $table->date('tanggal'); // Tambahkan kolom tanggal_booking
            $table->time('jam');     // Tambahkan kolom jam_booking
            $table->decimal('harga_sewa', 10, 2);

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
        Schema::dropIfExists('tujuan');
    }
};
