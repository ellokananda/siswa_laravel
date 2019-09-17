@extends('template')
<br>
<br>
<br>
<br>
<br>
@section('main')
<div id="siswa" style="padding-left:20px">
  <h2>Siswa</h2>

  @if (!empty($siswa_list))
  <table class="table">
    <thead>
      <tr>
        <th>NISN</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
        <th>Action</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($siswa_list as $siswa)
      <tr>
        <td>{{ $siswa->nisn }}</td>
        <td>{{ $siswa->nama_siswa }}</td>
        <td>{{ $siswa->tanggal_lahir }}</td>
        <td>{{ $siswa->jenis_kelamin }}</td>
        <td>{{ ! empty($siswa->kelas->nama_kelas) ?
              $siswa->kelas->nama_kelas : '-'
            }}</td>
        <td><a class="btn btn-success btn-sm" href="{{ url('siswa/'.$siswa->id) }}">Detail</a> </td>
        <td><a class="btn btn-warning btn-sm" href="{{ url('siswa/'.$siswa->id . '/edit') }}">Edit</a> </td>
        <td><a class="btn btn-danger btn-sm" href="{{ url('siswa/'.$siswa->id . '/delete') }}">Delete</a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah Siswa</a>
  <a href="{{ url('cetak') }}" class="btn btn-primary" target="_blank">Cetak PDF</a>
  @else
  <p>tidak ada data Siswa.</p>
  @endif
</div>
@stop

@section('footer')

<br>
<br>
<br>
<br>
@stop
