<div id="anggota" style="padding-left:20px">
  <h2>Anggota</h2>
  @if (!empty($anggota_list))
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Kelas</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Action</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($anggota_list as $anggota)
      <tr>
        <td>{{ $anggota->id }}</td>
        <td>{{ $anggota->nama_kelas }}</td>
        <td>{{ $anggota->tanggal_lahir }}</td>
        <td><a class="btn btn-success btn-sm" href="{{ url('anggota/'.$anggota->id) }}">Detail</a> </td>
        <td><a class="btn btn-warning btn-sm" href="{{ url('anggota/'.$anggota->id . '/edit') }}">Edit</a> </td>
        <td><a class="btn btn-danger btn-sm" href="{{ url('anggota/'.$anggota->id . '/delete') }}">Delete</a> </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ url('anggota/create') }}" class="btn btn-primary">Tambah Anggota</a>

  @else
  <p>tidak ada data Anggota.</p>
  @endif
</div>
@stop
