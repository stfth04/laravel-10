<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodi Add</title>
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

    <style>
    .form-container {
        display: flex;
        justify-content: center; /* Tengah horizontal */
        align-items: center;     /* Tengah vertikal */
        height: 100vh;           /* Tinggi penuh layar */
    }

    table {
        border-collapse: collapse;
        background-color: #f9f9f9;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    td {
        padding: 10px;
    }

    input {
        padding: 5px;
        width: 100%;
    }

    button {
        padding: 5px 10px;
    }
</style>

<div class="form-container">
    <form action="{{ route('prodi_add_action') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Kode Prodi</td>
                <td>
                    <input type="text" name="kode_prodi">
                </td>
            </tr>
            <tr>
                <td>Nama Prodi</td>
                <td>
                    <input type="text" name="nama_prodi">
                </td>
            </tr>
            <tr>
                <td>Nama Kaprodi</td>
                <td>
                    <input type="text" name="nama_kaprodi">
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
</div>
</body>
</html>
