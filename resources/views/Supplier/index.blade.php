@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DATA SUPPLIER</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-info btn-sm float-end" href="{{ url('supplier/create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>NAMA</td>
                <td>ALAMAT</td>
                <td>NOMOR HP</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->supplier_id}}</td>
                <td>{{ $row->supplier_nama}}</td>
                <td>{{ $row->supplier_alamat}}</td>
                <td>{{ $row->supplier_hp}}</td>
                <td><a class="btn btn-dark btn-sm float" href="{{url('supplier/' .$row->supplier_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('supplier/' .$row->supplier_id)}}" method="post">
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