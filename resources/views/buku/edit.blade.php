@extends('template')
<br>
<br>
<br>
<br>
@section('main')
<div id="buku">
  <h2>Edit Buku</h2>

  <form action="{{ url('buku/'.$buku->id.'/update') }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
      <label for="id" class="control-label">ID Buku</label>
      <input name="id" type="text" class="form-control" value="{{$buku->id}}">
    </div>
      <div class="form-group">
        <label for="judul" class="control-label">Judul</label>
        <input name="judul" type="text" class="form-control" value="{{$buku->pengarang}}">
      </div>
      <div class="form-group">
        <label for="pengarang" class="control-label">Pengarang</label>
        <input name="pengarang" type="text" class="form-control" value="{{$buku->pengarang}}">
      </div>
      <div class="form-group">
        <label for="genre" class="control-label">Genre</label>
        <input name="genre" type="text" class="form-control" value="{{$buku->genre}}">
      </div>
      <div class="form-group">
        <label for="stok" class="control-label">Stok</label>
        <input name="stok" type="number" class="form-control" value="{{$buku->stok}}">
      </div>
       <div class="form-group">
         <label for="avatar" class="control-label">Avatar</label>
         <input name="avatar" type="file" class="form-control" value="{{$buku->avatar}}">
       </div>
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>
 <br>
 <br>
 <br>
 @stop
