@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DATA TRANSAKSI</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-info btn-sm float-end" href="{{ url('transaksi/create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>NAMA BARANG</td>
                <td>NAMA PEMBELI</td>
                <td>TANGGAL</td>
                <td>KETERANGAN</td>
                <td>EDIT DATA</td>
                <td>HAPUS DATA</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->transaksi_id}}</td>
                <td>{{ $row->barang->barang_nama}}</td>
                <td>{{ $row->pembeli->pembeli_nama}}</td>
                <td>{{ $row->transaksi_tanggal}}</td>
                <td>{{ $row->transaksi_keterangan}}</td>
                <td><a class="btn btn-dark btn-sm float" href="{{url('transaksi/' .$row->transaksi_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('transaksi/' .$row->transaksi_id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('yakin data anda mau dihapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection