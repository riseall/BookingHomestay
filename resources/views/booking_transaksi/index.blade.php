@extends('layout.master')
@section('content')
    <div class="card-body p-4">
        <h4 class="card-title fw-semibold mb-4">Data Rumah</h4>
        <p align="right"><a href="{{ route('data_rumah.create') }}" class="btn btn-primary">Tambah Rumah</a></p>
        <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr>
                <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id transaksi</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">id pelanggan</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0"></h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Fasilitas</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Alamat</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Harga</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Detail</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Edit</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Hapus</h6>
                        </th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_rumah as $rumah)
                <tr>
                    <td>{{ $rumah->id }}</td>
                    <td>{{ $rumah->id_rumah }}</td>
                    <td>{{ $rumah->nama_rumah }}</td>
                    <td>
                        <img src="{{ asset('foto_rumah/'.$rumah->foto) }}" alt="" style="width: 60px; height: 40px">
                    </td>
                    <td>{{ $rumah->fasilitas }}</td>
                    <td>{{ $rumah->alamat }}</td>
                    <td>{{ $rumah->harga }}</td>
                    <td><a href="{{ route('data_rumah.show', $rumah->id) }}" class="btn btn-warning btn-sm">Detail</a></td>
                    <td><a href="{{ route('data_rumah.edit', $rumah->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('data_rumah.destroy', $rumah->id) }}" method="post">
                            @csrf
                            <button class="btn btn-warning btn-sm" onclick="return confirm('Anda yakin ingin Menghapus data ini?.')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pull-left">
            <strong>
                Jumlah Rumah : {{ $jumlah_rumah }}
            </strong>
        </div>
    </div>
</div>
@endsection