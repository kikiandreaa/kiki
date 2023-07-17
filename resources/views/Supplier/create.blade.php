@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA SUPPLIER</h3>
        <form action="{{ url('/supplier')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="supplier_nama" class="form-control" placeholder="Nama supplier">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="supplier_alamat" class="form-control" placeholder="Alamat supplier">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="supplier_hp" class="form-control" placeholder="Nomor Hp supplier">
            </div>
            <div class="mb-3">
                <input class="btn btn-secondary" type="submit" name="" id="" value="SIMPANN GESS">
            </div>
        </form>
    </div>
@endsection