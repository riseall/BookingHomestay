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
        Schema::create('booking_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi')->unique();
            $table->string('kode_pelanggan');
            $table->string('kode_rumah');
            $table->string('nama_rumah');
            $table->string('alamat_rumah');
            $table->date('trans_date');
            $table->timestamps();

            $table->primary('id_pelanggan', 'id_rumah');

            $table->foreign('kode_pelanggan')
            ->references('kode')->on('pelanggan')
            ->onDelete('cascade');

            $table->foreign('kode_rumah')
            ->references('kode')->on('rumah')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_transaksi');
    }
};
