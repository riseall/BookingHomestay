<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPelanggan extends Model
{
    use HasFactory;

    protected $table = 'data_pelanggan';

    public function data_rumah(){
        return $this->belongsToMany('App\Models\DataRumah', 'booking_transaksi', 'kode_pelanggan', 'kode_rumah');
    }

    public function booking_transaksi(){
        return $this->hasMany('App\Models\DataTransaksi', 'kode_pelanggan');
    }
}
