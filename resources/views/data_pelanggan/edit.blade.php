@extends('layout.master')
@section('content')

    <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Edit Data Pelanggan</h5>
              <div class="card">
                <div class="card-body">
                  <form method="POST" action="{{ route('data_pelanggan.update', $pelanggan->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Id pelanggan</label>
                      <input type="text" readonly class="form-control" name="id_pelanggan" value="{{ $pelanggan->id_pelanggan }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nama Pelanggan</label>
                      <input type="text" class="form-control" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Jenis Kelamin</label>
                      <input type="text" class="form-control" name="jenis_kelamin" value="{{ $pelanggan->jenis_kelamin }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="{{ $pelanggan->alamat }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection