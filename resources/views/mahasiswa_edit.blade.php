<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add mahasiswa</title>
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

    <form action="{{ route('mahasiswa_edit_action', $mahasiswa) }}" method="post">
        @method('patch')
        @csrf
        <table>
            <tr>
                <td>Nama Mahasiswa</td>
                <td> 
                    <input type="text" name="nama_mhs" value="{{ $mahasiswa->nama_mhs }}">
                </td>
            </tr>

            <tr>
                <td>NIM</td>
                <td> 
                    <input type="text" name="nim" value="{{ $mahasiswa->nim }}">
                </td>
            </tr>

            <tr>
                <td>Prodi</td>
                <td> 
                    <select name="prodi_id">
                        @foreach ($prodis as $prodi) 
                        <option value="{{ $prodi->id }}"
                        <?php if($prodi->id == $mahasiswa->prodi_id) { echo "selected" ; } ?>
                        >{{ $prodi->nama_prodi}}</option>
                         @endforeach
                    </select>
                </td>
            </tr>

             <tr>
                <td>No HP</td>
                <td> 
                    <input type="text" name="no_hp" value="{{ $mahasiswa->no_hp }}">
                </td>
            </tr>

            <tr>
                <td></td>
                <td> 
                    <a href="{{ route('mahasiswa_list') }}">Back</a>
                    <button type="submit">Submit</button>
                </td>
            </tr>
</body>
</html>