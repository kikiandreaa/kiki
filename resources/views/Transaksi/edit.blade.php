@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA TRANSAKSI</h3>
        <form action="{{ url('/transaksi/' .$row->transaksi_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">NAMA BARANG</label>
                <select name="transaksi_id_barang" id="" class="form-control">
                    <option value="">--Silahkan Pilih--</option>
                    @foreach ($barang as $brg)
                        <option value="{{$brg->barang_id}}">{{$brg->barang_nama}}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <label for="">NAMA PEMBELI</label>
                <select name="transaksi_id_pembeli" id="" class="form-control">
                    <option value="">--Silahkan Pilih--</option>
                    @foreach ($pembeli as $pbl)
                        <option value="{{$pbl->pembeli_id}}">{{$pbl->pembeli_nama}}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <label for="">TANGGAL</label>
                <input type="date" name="transaksi_tanggal" class="form-control" value="{{$row->transaksi_tanggal}}">
            </div>
            <div class="mb-3">
                <label for="">KETERANGAN</label>
                <input type="text" name="transaksi_keterangan" class="form-control" value="{{$row->transaksi_keterangan}}">
            </div>            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="UPDATE GESS">
            </div>
        </form>
    </div>
@endsection