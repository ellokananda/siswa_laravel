@extends('template')
<br>
<br>
<br>
@section('main')

<div id="buku">
  <h2>Detail Buku</h2>
  <table class="table table-striped">
    <tr>
      <center><img src="{{asset('img/'.$buku->avatar)}}" width="300px" ></center>
    </tr>
    <tr>
      <th>ID Buku</th>
      <td>{{ $buku->id }}</td>
    </tr>
    <tr>
      <th>Judul</th>
      <td>{{ $buku->judul }}</td>
    </tr>
    <tr>
      <th>Pengarang</th>
      <td>{{ $buku->pengarang }}</td>
    </tr>
      <tr>
        <th>Genre</th>
        <td>{{ $buku->genre }}</td>
    </tr>
    <tr>
      <th>Stok</th>
      <td>{{ $buku->stok }}</td>
  </tr>
  </table>
</div>
@stop
