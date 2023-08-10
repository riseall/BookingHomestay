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
        Schema::create('data_rumah', function (Blueprint $table) {
            $table->id();
            $table->string('id_rumah')->unique();
            $table->string('nama_rumah');
            $table->string('foto');
            $table->string('fasilitas');
            $table->string('alamat');
            $table->string('harga');
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
        Schema::dropIfExists('data_rumah');
    }
};
