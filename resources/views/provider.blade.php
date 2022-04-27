@extends('dashboard.layouts.main')

@section('toko')
<div class="container"><br>
    <a class="btn btn-primary" href="">Tambah Provaider</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama Provaider</th>
                <th scope="col">Nomer</th>
                <th scope="col">Harga Paket</th>
                <th scope="col">Aksi</th>
            </tr>
            {{-- @foreach ($provaider)
                <tr>
                    <td>{{ $c->nama_provaider }}</td>
                    <td>{{ $c->nomer_hp }}</td>
                    <td>{{ $c->Harga_paket }}</td>
                    <td>{{ $c->aksi }}</td>
        </thead> --}}
        <tbody>
            <tr>
                
            </tr>
        </tbody>
    </table>
@endsection
