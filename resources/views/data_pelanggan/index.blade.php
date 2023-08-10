@extends('layout.master')
@section('content')
    <div class="card-body p-4">
        <h4 class="card-title fw-semibold mb-4">Data Pelanggan</h4>
        <p align="right"><a href="{{ route('data_pelanggan.create') }}" class="btn btn-primary">Tambah Pelanggan</a></p>
        <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
                <tr>
                <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id Pelanggan</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama Pelanggan</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Jenis Kelamin</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Alamat</h6>
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
                @foreach($data_pelanggan as $pelanggan)
                <tr>
                    <td>{{ $pelanggan->id }}</td>
                    <td>{{ $pelanggan->id_pelanggan }}</td>
                    <td>{{ $pelanggan->nama_pelanggan }}</td>
                    <td>{{ $pelanggan->jenis_kelamin }}</td>
                    <td>{{ $pelanggan->alamat }}</td>
                    <td><a href="{{ route('data_pelanggan.edit', $pelanggan->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('data_pelanggan.destroy', $pelanggan->id) }}" method="post">
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
                Jumlah pelanggan : {{ $jumlah_pelanggan }}
            </strong>
        </div>
    </div>
</div>
@endsection