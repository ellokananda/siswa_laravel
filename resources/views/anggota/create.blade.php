@extends('template')
<br>
<br>
<br>
<br>
<br>
@section('main')
<div id="anggota">
  <h2>Tambah Anggota</h2>

    <form action="{{ url('anggota') }}" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label for="id" class="controllabel">ID Anggota</label>
        <input name="id" type="text" class="formcontrol">
      </div>

<div class="form-group">
  <label for="nama_anggota" class="controllabel">Nama Anggota</label>
  <input name="nama_anggota" type="text" class="form-control">
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
