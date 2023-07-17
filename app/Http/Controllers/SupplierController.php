<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Supplier::all();
        return view('supplier.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        supplier::create(
            [
                'supplier_nama' => $request->supplier_nama,
                'supplier_hp' => $request->supplier_hp,
                'supplier_alamat' => $request->supplier_alamat
            ]
        );

        return redirect('supplier')->with('success','Data berhasil ditambahkan');
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
        $row = supplier::findOrFail($id);
        return view('supplier.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = supplier::findOrFail($id);
        $row->update(
            [
                'supplier_nama' => $request->supplier_nama,
                'supplier_hp' => $request->supplier_hp,
                'supplier_alamat' => $request->supplier_alamat
            ]
        );
        return redirect('supplier')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = supplier::findOrFail($id);
        $row->delete();

        return redirect('supplier')->with('success', 'Data berhasil dihapus');
    }
}