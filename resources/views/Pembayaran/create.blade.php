@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA PEMBAYARAN</h3>
        <form action="{{ url('/pembayaran')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">TANGGAL TRANSAKSI</label>
                <select name="pembayaran_id_transaksi" id="" class="form-control">
                    <option value="">--Silahkan Pilih--</option>
                    @foreach ($transaksi as $tran)
                        <option value="{{$tran->transaksi_id}}">{{$tran->transaksi_tanggal}}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <label for="">TANGGAL BAYAR</label>
                <input type="date" name="pembayaran_tanggal" class="form-control" placeholder="Tanggal Pembayaran">
            </div>
            <div class="mb-3">
                <label for="">TOTAL</label>
                <input type="text" name="pembayaran_total" class="form-control" placeholder="Total">
            </div>
            <div class="mb-3">
                <input class="btn btn-secondary" type="submit" name="" id="" value="SIMPAN GESS">
            </div>
        </form>
    </div>
@endsection