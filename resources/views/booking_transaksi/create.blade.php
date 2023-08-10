@extends('layout.master')
@section('content')

    <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Tambah Data transaksi</h5>
              <div class="card">
                <div class="card-body">
                  <form method="POST" action="{{ route('booking_transaksi.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Id transaksi</label>
                      <input type="text" class="form-control" name="id_transaksi">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">id pelanggan</label>
                      <input type="text" class="form-control" name="id_pelanggan">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">id rumah</label>
                      <input type="text" class="form-control" name="id_rumah">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">nama rumah</label>
                      <input type="text" class="form-control" name="nama_rumah">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">alamat rumah</label>
                      <input type="text" class="form-control" name="alamat_rumah">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">total</label>
                      <input type="text" class="form-control" name="total">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">tanggal transaksi</label>
                      <input type="date" class="form-control" name="trans_date">
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