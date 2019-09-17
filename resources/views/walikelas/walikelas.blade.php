  @extends('template')
<br>
<br>
<br>
<br>
<br>
@section('main')
<div id="siswa" style="padding-left:20px">
  <h2>Wali Kelas</h2>

  @if (!empty($walikelas_list))
  <table class="table">
    <thead>
      <tr>
        <th>Nama Guru</th>
        <th>Nama Kelas</th>
        <th>Action</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($walikelas_list as $walikelas)
      <tr>
        <td>{{ ! empty($walikelas->guru->nama_guru) ?
              $walikelas->guru->nama_guru : '-'
            }}</td>
            <td>{{ ! empty($walikelas->kelas->nama_kelas) ?
                  $walikelas->kelas->nama_kelas : '-'
                }}</td>
        <td><a class="btn btn-success btn-sm" href="{{ url('walikelas/'.$walikelas->id) }}">Detail</a> </td>
        <td><a class="btn btn-warning btn-sm" href="{{ url('walikelas/'.$walikelas->id . '/edit') }}">Edit</a> </td>
        <td><a class="btn btn-danger btn-sm" href="{{ url('walikelas/'.$walikelas->id . '/delete') }}">Delete</a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ url('walikelas/create') }}" class="btn btn-primary">Tambah Wali Kelas</a>

  @else
  <p>tidak ada data Wali Kelas.</p>
  @endif
</div>
@stop
