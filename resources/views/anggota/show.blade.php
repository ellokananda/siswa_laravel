@extends('template')
<br>
<br>
<br>
@section('main')

<div id="anggota">
  <h2>Detail Anggota</h2>
  <table class="table table-striped">
    <tr>
      <center><img src="{{asset('img/'.$anggota->avatar)}}" width="300px" ></center>
    </tr>
    <tr>
      <th>ID Anggota</th>
      <td>{{ $anggota->id }}</td>
    </tr>
    <tr>
      <th>Nama</th>
      <td>{{ $anggota->nama_anggota }}</td>
    </tr>
    <tr>
      <th>Tanggal Lahir</th>
      <td>{{ $anggota->tanggal_lahir }}</td>
    </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td>{{ $anggota->jenis_kelamin }}</td>
    </tr>
    <tr>
      <th>Kelas</th>
      <td>{{ ! empty($siswa->kelas->nama_kelas) ?
            $siswa->kelas->nama_kelas : '-'
          }}</td>
    </tr>
  </table>
</div>
@stop
