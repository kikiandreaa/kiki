<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pembayaran::all();
        return view('pembayaran.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembayaran.create',[
            'transaksi' => Transaksi::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pembayaran::create(
            [
                'pembayaran_id_transaksi' => $request->pembayaran_id_transaksi,
                'pembayaran_tanggal' => $request->pembayaran_tanggal,
                'pembayaran_total' => $request->pembayaran_total
            ]
        );

        return redirect('pembayaran')->with('success','Data berhasil ditambahkan');
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
        $row = pembayaran::findOrFail($id);
        return view('pembayaran.edit', [
            'transaksi' => Transaksi::get()
        ],compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = pembayaran::findOrFail($id);
        $row->update(
            [
                'pembayaran_id_transaksi' => $request->pembayaran_id_transaksi,
                'pembayaran_tanggal' => $request->pembayaran_tanggal,
                'pembayaran_total' => $request->pembayaran_total
            ]
        );
        return redirect('pembayaran')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = pembayaran::findOrFail($id);
        $row->delete();

        return redirect('pembayaran')->with('success', 'Data berhasil dihapus');
    }
}