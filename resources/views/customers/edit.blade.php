@extends('dashboard.layouts.main')

@section('toko')

<div class="container"><br>
    <h1>Edit Data</h1><br>

    <form action="/pulsauser/{{$customers->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$customers->nama}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$customers->username}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nomer Handphone</label>
            <input type="text" name="nomer_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$customers->nomer_hp}}">
          </div>
       <select class="form-select" name="jenis_kelamin">
           <option value="">Pilih Jenis Kelamin</option>
           <option value="L" @if($customers->jenis_kelamin == "L") selected @endif>Laki-laki</option>
           <option value="P" @if($customers->jenis_kelamin == "L") selected @endif>Perempuan</option>
       </select><br>

       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
       <textarea class="form-control" name="alamat" rows="2" {{$customers->alamat}}></textarea><br>
       </div>
       <input type="submit" name="submit" class="btn btn-info" value="Update">
</form>
</div>
@endsection