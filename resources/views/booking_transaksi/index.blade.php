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
                          <h6 class="fw-semibold mb-0">Nama pelanggan</h6>
                        </th>
                        <th class="border-bottom-0">  
                          <h6 class="fw-semibold mb-0">Nama rumah</h6>
                        </th>
                        <!-- <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Alamat rumah</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Total</h6>
                        </th> -->
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tanggal Transaksi</h6>
                        </th>
                </tr>
            </thead>
            <tbody>
                @foreach($booking_transaksi as $transaksi)
                <tr>
                    <td>{{ $transaksi->id }}</td>
                    <td>{{ $transaksi->id_transaksi }}</td>
                    <td>{{ $transaksi->data_pelanggan['nama_pelanggan'] }}</td>
                    <td>{{ $transaksi->data_rumah['nama_rumah'] }}</td>
                    <!-- <td>{{ $transaksi->data_rumah['alamat_rumah'] }}</td>
                    <td>{{ $transaksi->data_rumah['total'] }}</td> -->
                    <td>{{ $transaksi->trans_date }}</td>
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