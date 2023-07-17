@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA BARANG</h3>
        <form action="{{ url('/barang')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">NAMA BARANG</label>
                <input type="text" name="barang_nama" class="form-control" placeholder="Nama Barang">
            </div>
            <div class="mb-3">
                <label for="">NAMA SUPPLIER</label>
                <select name="barang_id_supplier" id="" class="form-control">
                    <option value="">--Silahkan Pilih--</option>
                    @foreach ($supplier as $supp)
                        <option value="{{$supp->supplier_id}}">{{$supp->supplier_nama}}</option>
                    @endforeach
                </select>    
            </div>
            
            <div class="mb-3">
                <label for="">HARGA BARANG</label>
                <input type="text" name="barang_harga" class="form-control" placeholder="Harga Barang">
            </div>
            <div class="mb-3">
                <label for="">STOK BARANG</label>
                <input type="text" name="barang_stok" class="form-control" placeholder="Stok Barang">
            </div>
            <div class="mb-3">
                <input class="btn btn-secondary" type="submit" name="" id="" value="SIMPAN GESS">
            </div>
        </form>
    </div>
@endsection