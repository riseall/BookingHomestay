<?php

namespace App\Http\Controllers;

use App\Models\DataPelanggan;
use App\Models\DataRumah;
use App\Models\DataTransaksi;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use Storage;

class DataTransaksiController extends Controller
{
    public function index(){
        $booking_transaksi = DataTransaksi::all()->sortBy('id');
        $total =$booking_transaksi->count();
        return view('booking_transaksi.index', compact('booking_transaksi','total'));
    }
    public function show($id){
        $halaman = 'data_transaksi';
        $booking_transaksi = DataTransaksi::findOrfail($id);
        $data_rumah = DataRumah::findOrfail($id);
        return view('booking_transaksi.show', compact('halaman','booking_transaksi','data_rumah'));
    }

    public function create(){
        $list_data_pelanggan = DataPelanggan::pluck('nama_pelanggan', 'id');
        $list_data_rumah = DataRumah::pluck('nama_rumah', 'id');
        return view('booking_transaksi.create', compact('list_data_pelanggan', 'list_data_rumah'));
    }

    public function edit($id){
        $transaksi = DataTransaksi::find($id);
        return view('booking_transaksi.edit', compact('transaksi'));
    }

    public function store(Request $request){
        $booking_transaksi = new DataTransaksi;
        $booking_transaksi->id_transaksi = $request->id_transaksi;
        $booking_transaksi->kode_pelanggan = $request->id_pelanggan;
        $booking_transaksi->kode_rumah = $request->id_rumah;
        $booking_transaksi->nama_rumah = $request->nama_rumah;
        $booking_transaksi->alamat_rumah = $request->alamat_rumah;
        $booking_transaksi->trans_date = $request->trans_date;
        $booking_transaksi->save();
        return redirect('booking_transaksi');
    }

    public function update(Request $request, $id){
            $booking_transaksi = DataTransaksi::find($id);
            $booking_transaksi->id_transaksi = $request->id_transaksi;
            // $booking_transaksi->kode_pelanggan = $request->kode_pelanggan;
            // $booking_transaksi->kode_rumah = $request->id_rumah;
            $booking_transaksi->trans_date = $request->trans_date;
            $booking_transaksi->update();
        return redirect('booking_transaksi');
    }

    public function destroy($id){
        $rumah = DataTransaksi::find($id);
        $rumah->delete();
        return redirect('booking_transaksi');
    }

}