<?php

namespace App\Http\Controllers;

use App\Models\DataPelanggan;
use Illuminate\Http\Request;

class DataPelangganController extends Controller
{
    public function index(){
        $data_pelanggan = DataPelanggan::all();
        $jumlah_pelanggan =$data_pelanggan->count();
        return view('data_pelanggan.index', compact('data_pelanggan','jumlah_pelanggan'));
    }
    public function show($id){
        $data_pelanggan = DataPelanggan::find($id);
        return view('data_pelanggan.show', compact('data_pelanggan'));
    }

    public function create(){
        return view('data_pelanggan.create');
    }

    public function store(Request $request){
        $data_pelanggan = new DataPelanggan;
        $data_pelanggan->id_pelanggan = $request->id_pelanggan;
        $data_pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $data_pelanggan->jenis_kelamin = $request->jenis_kelamin;
        $data_pelanggan->alamat = $request->alamat;
        $data_pelanggan->save();
        return redirect('data_pelanggan');
    }

    public function edit($id){
        $pelanggan = DataPelanggan::find($id);
        return view('data_pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id){
            $data_pelanggan = DataPelanggan::find($id);
            $data_pelanggan->id_pelanggan = $request->id_pelanggan;
            $data_pelanggan->nama_pelanggan = $request->nama_pelanggan;
            $data_pelanggan->jenis_kelamin = $request->jenis_kelamin;
            $data_pelanggan->alamat = $request->alamat;
            $data_pelanggan->update();
        return redirect('data_pelanggan');
    }

    public function destroy($id){
        $rumah = DataPelanggan::find($id);
        $rumah->delete();
        return redirect('data_pelanggan');
    }
}
