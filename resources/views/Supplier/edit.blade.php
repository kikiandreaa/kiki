@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA SUPPLIER</h3>
        <form action="{{ url('/supplier/' .$row->supplier_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="supplier_nama" class="form-control" value="{{$row->supplier_nama}}">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="supplier_alamat" class="form-control" value="{{$row->supplier_alamat}}">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="supplier_hp" class="form-control" value="{{$row->supplier_hp}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection