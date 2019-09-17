@extends('template')
<br>
<br>
<br>
<br>
@section('main')
<div id="guru">
  <h2>Edit Kelas</h2>
  <form action="{{ url ('kelas/'.$kelas->id.'/update') }}"method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="id" class="control-label">ID</label>
      <input name="id" type="text" class="form-control" value="{{$kelas->id}}">
    </div>
      <div class="form-group">
        <label for="nama_kelas" class="control-label">Nama</label>
        <input name="nama_kelas" type="text" class="form-control" value="{{$kelas->nama_kelas}}">
      </div>
    </div>
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>
 </div>
 @stop
