@extends('template')
<br>
<br>
<br>
@section('main')

<div id="kelas">
  <h2>Detail Kelas</h2>
  <table class="table table-striped">
    <tr>
      <th>ID</th>
      <td>{{ $kelas->id }}</td>
    </tr>
    <tr>
      <th>Nama</th>
      <td>{{ $kelas->nama_kelas }}</td>
    </tr>
  </table>
</div>
@stop
