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
        Schema::create('sewa', function (Blueprint $table) {
            $table->id('id_sewa')->autoIncrement();
            $table->unsignedBigInteger('id_kendaraan');
            $table->foreign('id_kendaraan')->references('id_kendaraan')->on('kendaraan')->onDelete('cascade');
            $table->unsignedBigInteger('id_pelanggan');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('cascade');
            $table->unsignedBigInteger('id_tujuan');
            $table->foreign('id_tujuan')->references('id_tujuan')->on('tujuan')->onDelete('cascade');
            $table->string('nama');
            $table->string('email');
            $table->string('no_hp');
            $table->string('nama_kendaraan');
            $table->string('nomor_plat');
            $table->date('tanggal');
            $table->decimal('harga_sewa', 10, 2);
            $table->string('status');
        
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
        Schema::dropIfExists('sewa');
    }
};
