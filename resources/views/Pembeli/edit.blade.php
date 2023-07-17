@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA PEMBELI</h3>
        <form action="{{ url('/pembeli/' .$row->pembeli_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="pembeli_nama" class="form-control" value="{{$row->pembeli_nama}}">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="pembeli_alamat" class="form-control" value="{{$row->pembeli_alamat}}">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="pembeli_hp" class="form-control" value="{{$row->pembeli_hp}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection