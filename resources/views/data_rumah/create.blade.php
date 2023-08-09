@extends('layout.master')
@section('content')

    <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Tambah Data Rumah</h5>
              <div class="card">
                <div class="card-body">
                  <form method="POST" action="{{ route('data_rumah.store') }}">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Id Rumah</label>
                      <input type="text" class="form-control" name="id_rumah">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nama Rumah</label>
                      <input type="text" class="form-control" name="nama_rumah">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Foto</label>
                      <input type="text" class="form-control" name="foto">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Fasilitas</label>
                      <input type="text" class="form-control" name="fasilitas">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Alamat</label>
                      <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Harga</label>
                      <input type="text" class="form-control" name="harga">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection