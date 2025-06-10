<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodi</title>
</head>
    <body>
        <a href="{{ route('mahasiswa_add') }}">Tambah</a>
        <table>
            <tr>
                <th>No.</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>No Hp</th>
                <th>Aksi</th>
            </tr>
            @foreach($mahasiswas as $mahasiswa)
            <tr>
               
                    <td>{{ $mahasiswa->id }}</td>
                    <td>{{ $mahasiswa->nama_mhs }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->prodi->nama_prodi }}</td>
                    <td>{{ $mahasiswa->no_hp }}</td>
                    <td>
                        <form action="{{ route('mahasiswa_edit', $mahasiswa) }}" method="get">
                        @csrf
                            <input type="submit" value="Edit">
                        </form>

                        <form action="{{ route('mahasiswa_delete', $mahasiswa) }}" method="post">
                        @method('delete')
                        @csrf
                            <input type="submit" value="Hapus">
                        </form>
                    </td>

            </tr>
            @endforeach
        </table>
    </body>
</html>