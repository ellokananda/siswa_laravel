@extends('template')
<br>
<br>
<br>
@section('main')

<div id="siswa">
  <h2>Detail Siswa</h2>
  <table class="table table-striped">
    <tr>
      <center><img src="{{asset('img/'.$siswa->avatar)}}" width="300px" ></center>
    </tr>
    <tr>
      <th>NISN</th>
      <td>{{ $siswa->nisn }}</td>
    </tr>
    <tr>
      <th>Nama</th>
      <td>{{ $siswa->nama_siswa }}</td>
    </tr>
    <tr>
      <th>Tanggal Lahir</th>
      <td>{{ $siswa->tanggal_lahir }}</td>
    </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td>{{ $siswa->jenis_kelamin }}</td>
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
