<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Prodi</title>
</head>
<body>

    <a href="{{ route('prodi_add') }}">Tambah</a>

    <h1>Daftar Prodi Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
            <th>Nama Kaprodi</th>
            <th>Aksi</th>
        </tr>
        @foreach($prodis as $prodi)
        <tr>
            <td>{{ $prodi->id }}</td>
            <td>{{ $prodi->kode_prodi }}</td>
            <td>{{ $prodi->nama_prodi }}</td>
            <td>{{ $prodi->nama_kaprodi }}</td>
            <td>
                <a href="#">Edit</a> | <a href="#">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
