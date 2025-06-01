<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa Add</title>
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
<div class="form-container">
    <form action="{{ route('mahasiswa_add_action') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>
                    <input type="text" name="nama_mhs">
                </td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>
                    <input type="text" name="nim">
                </td>
            </tr>
            <tr>
                <td>Prodi ID</td>
                <td>
                    <input type="text" name="prodi_id">
                </td>
            </tr>
            <tr>
                <td>No Hp</td>
                <td>
                    <input type="text" name="no_hp">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <a href="{{ route('mahasiswa_list') }}">Back</a>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
