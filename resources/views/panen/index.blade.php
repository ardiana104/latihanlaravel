

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container"><br>
        <a class="btn btn-primary" href="/panen/create">Tambah</a>
        <a class="btn btn-primary" href="/panen/create">Post</a>
        <a class="btn btn-primary" href="/panen/create">Hapus</a>
        <table class="table table-hover">
            <tr>
                <th>produkID</th>
                <th>Kelompoktani</th>
                <th>Perkiraan Panen</th>
                <th>Perkiraan Jumblah</th>
                <th>Tanggal panen</th>
                <th>Jumblah Panen</th>
                <th>AKSI</th>
            </tr>
            @foreach ($panen as $c)
                <tr>
                    <td>{{ $c->productID }}</td>
                    <td>{{ $c->id_kelompok_tani }}</td>
                    <td>{{ $c->perkiraanPanenDate }}</td>
                    <td>{{ $c->perkiraanPanenJumlah }}</td>
                    <td>{{ $c->PanenDate }}</td>
                    <td>{{ $c->PanenJumlah }}</td>
                    <td>
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <a class="btn btn-success " href="#">Detail</a>
                            <a class="btn btn-warning " href="/panen/{{ $c->id }}/edit">Edit</a>
                            <form action="/panen/{{ $c->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </div>
                    <td>
                </tr>
            @endforeach
        </table>
</body>
</html>