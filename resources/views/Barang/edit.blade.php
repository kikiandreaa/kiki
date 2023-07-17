@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA BARANG</h3>
        <form action="{{ url('/barang/' .$row->barang_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">NAMA BARANG</label>
                <input type="text" name="barang_nama" class="form-control" value="{{$row->barang_nama}}">
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
                <input type="text" name="barang_harga" class="form-control" value="{{$row->barang_harga}}">
            </div>
            <div class="mb-3">
                <label for="">STOK BARANG</label>
                <input type="text" name="barang_stok" class="form-control" value="{{$row->barang_stok}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="UPDATE GESS">
            </div>
        </form>
    </div>
@endsection