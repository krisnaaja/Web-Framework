@extends('layouts.app')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Kategori</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jumlah</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($laporans as $laporan)
        <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $laporan['kode_barang'] }}</td>
            <td>{{ $laporan['nama_barang'] }}</td>
            <td>{{ $laporan['kategori'] }}</td>
            <td>{{ $laporan['tanggal'] }}</td>
            <td>{{ $laporan['jumlah'] }} pcs</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection