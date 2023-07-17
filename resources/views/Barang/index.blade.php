@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DATA BARANG</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-info btn-sm float-end" href="{{ url('barang/create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>NAMA BARANG</td>
                <td>NAMA SUPPLIER</td>
                <td>HARGA BARANG</td>
                <td>STOK BARANG</td>
                <td>EDIT DATA</td>
                <td>HAPUS DATA</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->barang_id}}</td>
                <td>{{ $row->barang_nama}}</td>
                <td>{{ $row->supplier->supplier_nama}}</td>
                <td>{{ $row->barang_harga}}</td>
                <td>{{ $row->barang_stok}}</td>
                <td><a class="btn btn-dark btn-sm float" href="{{url('barang/' .$row->barang_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('barang/' .$row->barang_id)}}" method="post">
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