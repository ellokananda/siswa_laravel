@if (!empty($siswa_list))
<a href="../public/siswa/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a>
<br>
<br>
<table class="table lead text-center text-secondary">
  <thead>
    <tr>
      <th>NISN</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Kelas</th>
    </tr>
  </thead>
  <tbody>
    @foreach($siswa_list as $siswa)
    <tr>
      <td>{{ $siswa->nisn }}</td>
      <td>{{ $siswa->nama_siswa }}</td>
      <td>{{ $siswa->tanggal_lahir }}</td>
      <td>{{ $siswa->jenis_kelamin }}</td>
      <td>{{ ! empty($siswa->kelas->nama_kelas) ?
            $siswa->kelas->nama_kelas : '-'
          }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
<p>Tidak ada data siswa</p>
@endif
