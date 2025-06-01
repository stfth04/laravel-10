<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="table-wrapper">
        <div class="table-header">
            <a href="{{ route('mahasiswa_add') }}" class="btn-tambah">+ Tambah Mahasiswa</a>
            <h1>Daftar Mahasiswa</h1>
        </div>
        <table>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
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
    </div>
</body>
</html>
