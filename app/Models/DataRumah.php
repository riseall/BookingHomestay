<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRumah extends Model
{
    use HasFactory;

    protected $table = 'data_rumah';

    public function data_pelanggan(){
        return $this->belongsToMany('App\Models\DataPelanggan', 'booking_transaksi', 'kode_rumah', 'kode_pelanggan');
    }

    public function booking_transaksi(){
        return $this->hasMany('App\Models\DataTransaksi', 'kode_pelanggan');
    }
}
