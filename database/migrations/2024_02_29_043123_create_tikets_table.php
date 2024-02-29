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
        Schema::create('tikets', function (Blueprint $table) {
            $table->id('id');
            $table->date('tanggal_kunjungan');
            $table->integer('biaya');
            $table->integer('jumlah_tiket');
            $table->unsignedBigInteger("id_pengunjung");
            $table->unsignedBigInteger("id_petugas");
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_pengunjung')->references('id')->on('pengunjungs');
            $table->foreign('id_petugas')->references('id')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
