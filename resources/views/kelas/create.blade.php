@extends('template')
<br>
<br>
<br>
<br>
<br>
@section('main')
<div id="kelas">
  <h2>Tambah Kelas</h2>
    <form action="{{ url('kelas') }}" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label for="id" class="controllabel">ID</label>
        <input name="id" type="text" class="formcontrol">
      </div>
      <div class="form-group">
        <label for="nama_kelas" class="controllabel">Nama Kelas</label>
        <input name="nama_kelas" type="text" class="form-control">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
     @stop
