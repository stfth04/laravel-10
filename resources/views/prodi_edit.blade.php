<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Prodi</title>
</head>
<body>
    @if ($errors->any())
    <p>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </p>
    @endif

    <form action="{{ route('prodi_edit_action', $prodi) }}" method="post">
        @method('patch')
        @csrf
        <table>
            <tr>
                <td>Kode Prodi</td>
                <td> 
                    <input type="text" name="kode_prodi" value="{{ $prodi->kode_prodi }}">
                </td>
            </tr>

            <tr>
                <td>Nama Prodi</td>
                <td> 
                    <input type="text" name="nama_prodi" value="{{ $prodi->nama_prodi }}">
                </td>
            </tr>

            <tr>
                <td>Nama Kaprodi</td>
                <td> 
                    <input type="text" name="nama_kaprodi" value="{{ $prodi->nama_kaprodi }}">
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <a href="{{ route('prodi_list') }}">Back</a>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
