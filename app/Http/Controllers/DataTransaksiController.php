<?php

namespace App\Http\Controllers;

use App\Models\DataTransaksi;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use Storage;

class DataTransaksiController extends Controller
{
    public function index(){
        $booking_transaksi = DataTransaksi::all();
        $total =$booking_transaksi->count();
        return view('booking_transaksi.index', compact('booking_transaksi','total'));
    }
    public function show($id){
        $booking_transaksi = DataTransaksi::find($id);
        return view('booking_transaksi.show', compact('booking_transaksi'));
    }

    public function create(){
        return view('booking_transaksi.create');
    }

    public function store(Request $request){
        $booking_transaksi = new DataTransaksi;
        $booking_transaksi->id_transaksi = $request->id_transaksi;
        $booking_transaksi->id_pelanggan = $request->id_pelanggan;
        $booking_transaksi->id_rumah = $request->id_rumah;
        $booking_transaksi->nama_rumah = $request->nama_rumah;
        $booking_transaksi->alamat_rumah = $request->alamat_rumah;
        $booking_transaksi->total = $request->total;
        $booking_transaksi->trans_date = $request->trans_date;
        $booking_transaksi->save();
        return redirect('booking_transaksi');
    }

    public function update(Request $request, $id){
            $booking_transaksi = DataTransaksi::find($id);
            $booking_transaksi->id_transaksi = $request->id_transaksi;
            $booking_transaksi->id_pelanggan = $request->id_pelanggan;
            $booking_transaksi->id_rumah = $request->id_rumah;
            $booking_transaksi->nama_rumah = $request->nama_rumah;
            $booking_transaksi->alamat_rumah = $request->alamat_rumah;
            $booking_transaksi->total = $request->total;
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