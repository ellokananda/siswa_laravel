@extends('template')
<br>
<br>
<br>
<br>
<br>
@section('main')
<div id="buku" style="padding-left:20px">
  <h2>Buku</h2>

  @if (!empty($buku_list))
  <table class="table">
    <thead>
      <tr>
        <th>ID Buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Genre</th>
        <th>Stok</th>
        <th>Action</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($buku_list as $buku)
      <tr>
        <td>{{ $buku->id }}</td>
        <td>{{ $buku->judul }}</td>
        <td>{{ $buku->pengarang }}</td>
        <td>{{ $buku->genre }}</td>
        <td>{{ $buku->stok }}</td>
        <td><a class="btn btn-success btn-sm" href="{{ url('buku/'.$buku->id) }}">Detail</a> </td>
        <td><a class="btn btn-warning btn-sm" href="{{ url('buku/'.$buku->id . '/edit') }}">Edit</a> </td>
        <td><a class="btn btn-danger btn-sm" href="{{ url('buku/'.$buku->id . '/delete') }}">Delete</a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ url('buku/create') }}" class="btn btn-primary">Tambah Buku</a>
  <a href="{{ url('cetak') }}" class="btn btn-primary" target="_blank">Cetak PDF</a>
  @else
  <p>tidak ada data Buku.</p>
  @endif
</div>
@stop

@section('footer')

<br>
<br>
<br>
<br>
@stop
