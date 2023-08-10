@extends('layout.master')
@section('content')

    <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Edit Data Rumah</h5>
              <div class="card">
                <div class="card-body">
                  <form method="POST" action="{{ route('data_rumah.update', $rumah->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Id Transaksi</label>
                      <input type="text" readonly class="form-control" name="id_transaksi" value="{{ $transaksi->id_transaksi }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">id pelanggan</label>
                      <input type="text" class="form-control" name="id_pelanggan" value="{{ $transaksi->id_pelanggan }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">id rumah</label>
                      <input type="file" class="form-control" name="id_rumah" value="{{ $transaksi->id_rumah }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">nama rumah</label>
                      <input type="text" class="form-control" name="nama_rumah" value="{{ $trasaksi->nama_rumah }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Alamat rumah</label>
                      <input type="text" class="form-control" name="alamat_rumah" value="{{ $transaksi->alamat_rumah }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">total</label>
                      <input type="text" class="form-control" name="total" value="{{ $transaksi->total }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">tanggal transaksi</label>
                      <input type="text" class="form-control" name="trans_date" value="{{ $transaksi->trans_date }}">
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