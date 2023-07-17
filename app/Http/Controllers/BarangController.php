<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Barang::all();
        return view('barang.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create',[
            'supplier' => Supplier::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        barang::create(
            [
                'barang_nama' => $request->barang_nama,
                'barang_id_supplier' => $request->barang_id_supplier,
                'barang_harga' => $request->barang_harga,
                'barang_stok' => $request->barang_stok
            ]
        );

        return redirect('barang')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = barang::findOrFail($id);
        return view('barang.edit',[
            'supplier' => Supplier::get()
        ],compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = barang::findOrFail($id);
        $row->update(
            [
                'barang_nama' => $request->barang_nama,
                'barang_id_supplier' => $request->barang_id_supplier,
                'barang_harga' => $request->barang_harga,
                'barang_stok' => $request->barang_stok
            ]
        );
        return redirect('barang')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = barang::findOrFail($id);
        $row->delete();

        return redirect('barang')->with('success', 'Data berhasil dihapus');
    }
}
