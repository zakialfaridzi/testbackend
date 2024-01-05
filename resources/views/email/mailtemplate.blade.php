<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>SMTP Email</title>
</head>
<body>
    <p><b>{{$details['namaadmin']}}</b> baru saja menambahkan data pegawai baru seperti berikut:</p>
    <table>
      <tr>
        <td>Nama Pegawai</td>
        <td>:</td>
        <td>{{$details['nama']}}</td>
      </tr>
      <tr>
        <td>Email Pegawai</td>
        <td>:</td>
        <td>{{$details['email']}}</td>
      </tr>
      <tr>
        <td>NIP</td>
        <td>:</td>
        <td>{{$details['nip']}}</td>
      </tr>
      <tr>
        <td>NIK</td>
        <td>:</td>
        <td>{{$details['nik']}}</td>
      </tr>
    </table>
</body>
</html>
