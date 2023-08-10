@extends('layout.master')
@section('content')
    <div class="card-body p-4">
        <h4 class="card-title fw-semibold mb-4">Data Transaksi</h4>
        <p align="right"><a href="{{ route('booking_transaksi.create') }}" class="btn btn-primary">Tambah transaksi</a></p>
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
                          <h6 class="fw-semibold mb-0">nama rumah</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">alamat rumah</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">total</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">tanggal transaksi</h6>
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
                @foreach($booking_transaksi as $transaksi)
                <tr>
                    <td>{{ $transaksi->id }}</td>
                    <td>{{ $transaksi->id_transaksi }}</td>
                    <td>{{ $transaksi->id_pelanggan }}</td>
                    <td>{{ $transaksi->nama_rumah }}</td>
                    <td>{{ $transaksi->alamat_rumah }}</td>
                    <td>{{ $transaksi->total }}</td>
                    <td>{{ $transaksi->trans_date }}</td>
                    <td><a href="{{ route('booking_transaksi.edit', $transaksi->id) }}" class="btn btn-warning btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('booking_transaksi.destroy', $transaksi->id) }}" method="post">
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
                total transaksi : {{ $total }}
            </strong>
        </div>
    </div>
</div>
@endsection