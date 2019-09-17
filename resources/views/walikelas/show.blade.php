@extends('template')
<br>
<br>
<br>
@section('main')

<div id="siswa">
  <h2>Detail Siswa</h2>
  <table class="table table-striped">
    <tr>
      <th>Nama Guru</th>
      <td>{{ $walikelas->guru->nama_guru }}</td>
    </tr>
    <tr>
      <th>Nama Kelas</th>
      <td>{{ $walikelas->kelas->nama_kelas }}</td>
    </tr>
  </table>
</div>
@stop
