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
            $table->string('id_pelanggan')->unique();
            $table->string('id_rumah')->unique();
            $table->string('nama_rumah');
            $table->string('alamat_rumah');
            $table->integer('total');
            $table->date('trans_date');
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
        Schema::dropIfExists('booking_transaksi');
    }
};
