@extends('layouts.app')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($kategoris as $kategori)
        <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $kategori['name'] }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection