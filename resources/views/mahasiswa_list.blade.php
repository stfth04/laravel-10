<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi ID</th>
            <th>No Hp</th>
        </tr>
        @foreach($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $mahasiswa->nama_mhs }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->prodi->nama_prodi }}</td>
            <td>{{ $mahasiswa->no_hp }}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>
