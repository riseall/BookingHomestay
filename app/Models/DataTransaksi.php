<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTransaksi extends Model
{
    use HasFactory;

    protected $table = 'booking_transaksi';

    public function data_pelanggan(){
        return $this->belongsTo('App\Models\DataPelanggan', 'kode_pelanggan');
    }

    public function data_rumah(){
        return $this->belongsTo('App\Models\DataRumah', 'kode_rumah');
    }
}
