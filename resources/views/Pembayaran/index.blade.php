@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DATA PEMBAYARAN</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-info btn-sm float-end" href="{{ url('pembayaran/create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>TANGGAL TRANSAKSI</td>
                <td>TANGGAL PEMBAYARAN</td>
                <td>TOTAL</td>
                <td>EDIT DATA</td>
                <td>HAPUS DATA</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->pembayaran_id}}</td>
                <td>{{ $row->transaksi->transaksi_tanggal}}</td>
                <td>{{ $row->pembayaran_tanggal}}</td>
                <td>{{ $row->pembayaran_total}}</td>
                <td><a class="btn btn-dark btn-sm float" href="{{url('pembayaran/' .$row->pembayaran_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('pembayaran/' .$row->pembayaran_id)}}" method="post">
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