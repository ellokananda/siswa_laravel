@extends('template')
<br>
<br>
<br>
<br>
@section('main')
<div id="siswa">
  <h2>Edit Siswa</h2>

  <form action="{{ url('siswa/'.$siswa->id.'/update') }}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
      <label for="nisn" class="control-label">NISN</label>
      <input name="nisn" type="text" class="form-control" value="{{$siswa->nisn}}">
    </div>
      <div class="form-group">
        <label for="nama_siswa" class="control-label">Nama</label>
        <input name="nama_siswa" type="text" class="form-control" value="{{$siswa->nama_siswa}}">
      </div>
      <div class="form-group">
        <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
        <input name="tanggal_lahir" type="date" class="form-control" value="{{$siswa->tanggal_lahir}}">
      </div>
      <div class="form-group">
        <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
        @if ($siswa->jenis_kelamin=="P")
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked>
          <label class="form-check-label" for="jenis_kelamin">
            Perempuan
          </label>
      </div>
       <div class="form-check">
         <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked>
         <label class="form-check-label" for="jenis_kelamin">
           Laki-Laki
         </label>
       </div>

       @elseif ($siswa->jenis_kelamin=="L")
       <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">
      <label class="form-check-label" for="jenis_kelamin">
         Perempuan
       </label>
     </div>
     <div class="form-check">
       <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked>
       <label class="form-check-label" for="jenis_kelamin">
         Laki-Laki
       </label>
     </div>
       @endif

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
         <input name="avatar" type="file" class="form-control" value="{{$siswa->avatar}}">
       </div>
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>
 </div>
 <br>
 <br>
 <br>
 @stop
