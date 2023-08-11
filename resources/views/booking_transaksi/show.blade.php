@extends('layout.master')
@section('content')
    <div class="card-body p-4">
        <h4 class="card-title fw-semibold mb-4">Data Transaksi</h4>
        <p>Id Pelanggan : {{ $booking_transaksi->data_pelanggan['id_pelanggan'] }}</p>
        <p>Nama Pelanggan : {{ $booking_transaksi->data_pelanggan['nama_pelanggan']  }}</p>
        <p>Tanggal Transaksi : {{ $booking_transaksi->trans_date}}</p><br>
        <p>Nama Rumah : {{ $booking_transaksi->data_rumah['nama_rumah'] }}</p>
        <p>Fasilitas : {{ $booking_transaksi->data_rumah['fasilitas'] }}</p>
        <!-- <p>Foto : <img src="{{ asset('foto_rumah/'.$data_rumah->foto) }}" alt="" style="width: 60px; height: 40px"></p> -->
        <p>Alamat Rumah : {{ $booking_transaksi->data_rumah['alamat'] }}</p>
        <p>Harga : {{ $booking_transaksi->data_rumah['harga'] }}</p>
    </div>
</div>
@endsection