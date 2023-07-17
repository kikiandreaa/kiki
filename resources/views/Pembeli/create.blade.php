@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA PEMBELI</h3>
        <form action="{{ url('/pembeli')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="pembeli_nama" class="form-control" placeholder="Nama pembeli">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="pembeli_alamat" class="form-control" placeholder="Alamat pembeli">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="pembeli_hp" class="form-control" placeholder="Nomor Hp pembeli">
            </div>
            <div class="mb-3">
                <input class="btn btn-secondary" type="submit" name="" id="" value="SIMPANN GESS">
            </div>
        </form>
    </div>
@endsection