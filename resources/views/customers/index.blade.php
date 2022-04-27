@extends('dashboard.layouts.main')

@section('toko')

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
        <a class="btn btn-primary" href="/pulsauser/create">Add Customers</a>
        <table class="table table-striped table-hover">
            <tr>
                <th>NAMA</th>
                <th>USERNAME</th>
                <th>NOMER</th>
                <th>JENIS KELAMIN</th>
                <th>AlAMAT</th>
                <th>AKSI</th>
            </tr>
            @foreach ($customers as $c)
                <tr>
                    <td>{{ $c->nama }}</td>
                    <td>{{ $c->username }}</td>
                    <td>{{ $c->nomer_hp }}</td>
                    <td>{{ $c->jenis_kelamin }}</td>
                    <td>{{ $c->alamat }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-warning" href="/pulsauser/{{ $c->id }}/edit">Edit</a>
                            <form action="/pulsauser/{{ $c->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
@endsection
