@extends('template')
<br>
<br>
<br>
<br>
<br>
@section('main')
<div id="guru" style="padding-left:20px">
  <h2>Guru</h2>

  @if (!empty($guru_list))
  <table class="table">
    <thead>
      <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Action</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($guru_list as $guru)
      <tr>
        <td>{{ $guru->nip }}</td>
        <td>{{ $guru->nama_guru }}</td>
        <td>{{ $guru->tanggal_lahir }}</td>
        <td>{{ $guru->jenis_kelamin }}</td>
        <td><a class="btn btn-success btn-sm" href="{{ url('guru/'.$guru->id) }}">Detail</a> </td>
        <td><a class="btn btn-warning btn-sm" href="{{ url('guru/'.$guru->id . '/edit') }}">Edit</a> </td>
        <td><a class="btn btn-danger btn-sm" href="{{ url('guru/'.$guru->id . '/delete') }}">Delete</a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ url('guru/create') }}" class="btn btn-primary">Tambah Guru</a>

  @else
  <p>tidak ada data Guru.</p>
  @endif
</div>
@stop
