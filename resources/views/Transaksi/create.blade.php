@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA TRANSAKSI</h3>
        <form action="{{ url('/transaksi')}}" method="post">
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
                <input type="date" name="transaksi_tanggal" class="form-control" placeholder="Tanggal transaksi">
            </div>
            <div class="mb-3">
                <label for="">KETERANGAN</label>
                <input type="text" name="transaksi_keterangan" class="form-control" placeholder="Keterangan">
            </div>
            <div class="mb-3">
                <input class="btn btn-secondary" type="submit" name="" id="" value="SIMPAN GESS">
            </div>
        </form>
    </div>
@endsection