<?php

namespace App\Http\Controllers;

use App\Models\DataRumah;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DataRumahController extends Controller
{
    public function index(){
        $data_rumah = DataRumah::all();
        $jumlah_rumah = $data_rumah->count();
        return view('data_rumah.index', compact('data_rumah','jumlah_rumah'));
    }

    public function show($id): View{
        $data_rumah = DataRumah::findOrFail($id);
        return view('data_rumah.detail', compact('data_rumah'));
    }

    public function create(){
        return view('data_rumah.create');
    }

    public function store(Request $request){
        $data_rumah = new DataRumah;
        $data_rumah->id_rumah = $request->id_rumah;
        $data_rumah->nama_rumah = $request->nama_rumah;
        $data_rumah->foto = $request->foto;
        $data_rumah->fasilitas = $request->fasilitas;
        $data_rumah->alamat = $request->alamat;
        $data_rumah->harga = $request->harga;
        $data_rumah->save();
        return redirect('data_rumah');
    }

    public function edit($id){
        $rumah = DataRumah::find($id);
        return view('data_rumah.edit', compact('rumah'));
    }

    public function update(Request $request, $id){
        $data_rumah = DataRumah::find($id);
        $data_rumah->id_rumah = $request->id_rumah;
        $data_rumah->nama_rumah = $request->nama_rumah;
        $data_rumah->foto = $request->foto;
        $data_rumah->fasilitas = $request->fasilitas;
        $data_rumah->alamat = $request->alamat;
        $data_rumah->harga = $request->harga;
        $data_rumah->update();
        return redirect('data_rumah');
    }

    public function destroy($id){
        $rumah = DataRumah::find($id);
        $rumah->delete();
        return redirect('data_rumah');
    }
}
