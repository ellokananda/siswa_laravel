@extends('template')
<br>
<br>
<br>
<br>
@section('main')
  <div id="walikelas">
    <h2>Edit Walikelas</h2>
    <form action="{{ url('walikelas/' . $walikelas->id . '/update') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="id_guru" class="control-label">Nama Guru</label>
        <select name="id_guru" class="form-control" class="custom-select">
        <option selected>Pilih Nama Guru</option>
        @foreach ($guru as $guru)
        <option value="{{$guru->id}}">{{$guru->nama_guru}}</option>
        @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="id_kelas" class="control-label">Nama Kelas</label>
        <select name="id_kelas" class="form-control" class="custom-select">
        <option selected>Pilih Nama Kelas</option>
        @foreach ($kelas as $kelas)
        <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
        @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
