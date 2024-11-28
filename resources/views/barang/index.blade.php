@extends('layouts.app')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kode</th>
      <th scope="col">Nama</th>
      <th scope="col">Kategori</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($barangs as $barang)
        <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $barang['kode'] }}</td>
            <td>{{ $barang['nama'] }}</td>
            <td>{{ $barang['kategori'] }}</td>
            <td>{{ 'Rp ' . number_format($barang['harga'], 0, ',', '.') }}</td>
            <td>{{ $barang['stok'] }} pcs</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection