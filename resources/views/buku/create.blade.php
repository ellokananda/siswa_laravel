@extends('template')
<br>
<br>
<br>
<br>
<br>
@section('main')
<div id="buku">
  <h2>Tambah Buku</h2>

    <form action="{{ url('buku') }}" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label for="id" class="controllabel">ID Buku</label>
        <input name="id" type="text" class="formcontrol">
      </div>

<div class="form-group">
  <label for="judul" class="controllabel">Judul</label>
  <input name="judul" type="text" class="form-control">
</div>

<div class="form-group">
  <label for="pengarang" class="controllabel">Nama Pengarang</label>
  <input name="pengarang" type="text" class="form-control">
</div>

<div class="form-group">
  <label for="genre" class="controllabel">Genre</label>
  <input name="genre" type="number" class="form-control">
</div>

<div class="form-group">
  <label for="stok" class="controllabel">Stok</label>
  <input name="stok" type="number" class="form-control">
</div>
<div class="form-group">
  <label for="avatar" class="control-label">Avatar</label>
  <input name="avatar" type="file" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<br>
<br>
<br>
</form>
</div>
 @stop
