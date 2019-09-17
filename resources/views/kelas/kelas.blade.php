@extends('template')
<br>
<br>
<br>
<br>
<br>
@section('main')
<div id="kelas" style="padding-left:20px">
  <h2>Kelas</h2>
  @if (!empty($kelas_list))
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Kelas</th>
        <th>Action</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($kelas_list as $kelas)
      <tr>
        <td>{{ $kelas->id }}</td>
        <td>{{ $kelas->nama_kelas }}</td>
        <td><a class="btn btn-success btn-sm" href="{{ url('kelas/'.$kelas->id) }}">Detail</a> </td>
        <td><a class="btn btn-warning btn-sm" href="{{ url('kelas/'.$kelas->id . '/edit') }}">Edit</a> </td>
        <td><a class="btn btn-danger btn-sm" href="{{ url('kelas/'.$kelas->id . '/delete') }}">Delete</a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ url('kelas/create') }}" class="btn btn-primary">Tambah Kelas</a>
<br>
<br>
<br>
<br>
  @else
  <p>tidak ada data Guru.</p>
  @endif
</div>
@stop
