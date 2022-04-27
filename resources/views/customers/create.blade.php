@extends('dashboard.layouts.main')

@section('toko')
   
    <div class="container"><br>
        <h1>Create Customers</h1>
        <form action="/pulsauser/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomer Handphone</label>
                <input type="text" name="nomer_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
           <select class="form-select" name="jenis_kelamin">
               <option value="">Pilih Jenis Kelamin</option>
               <option value="L">Laki-laki</option>
               <option value="P">Perempuan</option>
           </select><br>

           <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
           <textarea class="form-control" name="alamat" rows="2"></textarea><br>
           <input type="submit" name="submit" class="btn btn-info" value="Save">
        </form>
    </div>
    
@endsection
