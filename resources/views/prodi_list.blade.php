<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Prodi</title>
</head>
<body>
        <a href="{{ route('prodi_add') }}">Tambah Prodi</a>
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
                <td>
                     <form action="{{ route('prodi_edit', $prodi) }}" method="get">
                        @csrf
                            <input type="submit" value="Edit">
                        </form>

                        <form action="{{ route('prodi_delete', $prodi) }}" method="post">
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
