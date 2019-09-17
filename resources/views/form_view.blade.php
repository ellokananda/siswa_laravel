<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Registration</title>
  </head>
  <body>
    <h3 align="center">FORM REGISTRATION</h3>
    <form action="{{ url('/send') }}" method="post">
      {{ csrf_field() }}
      <table>
        <tr>
          <td>Nama</td>
          <td>: <input type="text" name="nama" placeholder="Nama Lengkap" required> </td>
        </tr>
        <tr>
          <td>NIS</td>
          <td>: <input type="nis" name="nis" placeholder="NIS" required> </td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td>: <input type="kelas" name="kelas" placeholder="Kelas" required> </td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td>: <input type="jurusan" name="jurusan" placeholder="Jurusan" required> </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>: <input type="alamat" name="alamat" placeholder="Alamat" required> </td>
        </tr>
        <tr>
          <td>
            <button type="submit">Save</button>
          </td>
        </tr>
        <tr>
          <td> <button type="submit">Cancel</button>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
