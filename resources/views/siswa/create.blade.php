@extends('template')
<br>
<br>
<br>
<br>
<br>
@section('main')
<div id="siswa">
  <h2>Tambah Siswa</h2>

    <form action="{{ url('siswa') }}" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label for="nisn" class="controllabel">NISN</label>
        <input name="nisn" type="text" class="formcontrol">
      </div>

<div class="form-group">
  <label for="nama_siswa" class="controllabel">Nama</label>
  <input name="nama_siswa" type="text" class="form-control">
</div>

<div class="form-group">
  <label for="tanggal_lahir" class="controllabel">Tanggal Lahir</label>
  <input name="tanggal_lahir" type="date" class="form-control">
</div>

<div class="form-group">
  <label for="jenis_kelamin" class="controllabel">Jenis Kelamin</label>

<div class="form-check">
  <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked>
  <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">
  <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
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

<div class="form-group">
  <label for="avatar" class="control-label">Avatar</label>
  <input name="avatar" type="file" class="form-control">
</div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<br>
<br>
<br>
</form>
</div>
 @stop
