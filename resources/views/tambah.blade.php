@extends('dashboard.layouts.main')

@section('toko')
<div class="mb-3">
        <div class="box-header">
            <label for="tambah user" class="form-label">Tambah Customers</label>
            <input type="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
            <label for="tambah user" class="form-label">Username</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Username">
            <label for="aktif" class="form-label">Kelamin</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="laki/perempuan">
            <label for="tambah user" class="form-label">Status</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Aktif/NonAktif">
            <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <a class="btn btn-primary md-2" href="/" role="button">Masukan</a>
        </div>
        
@endsection
