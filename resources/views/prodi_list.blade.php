<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Prodi</title>
</head>
<body>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
        <div class="table-wrapper">
        <div class="table-header">
        <a href="{{ route('prodi_add') }}" class="btn-tambah">+ Tambah Prodi</a>
        <h1>Daftar Prodi Mahasiswa</h1>
        </div>
        <table>
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
                <td class="action-links">
                    <a href="#">Edit</a> | 
                    <a href="#">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
