<?php

namespace App\Http\Controllers\Barang;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangList = Barang::all(); // Retrieve data from the database
        return view('barang.index', compact('barangList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_barang' => 'required',
            'merek' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'satuan' => 'required',
        ]);
    
        $barang = new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->merek = $request->merek;
        $barang->harga = $request->harga;
        $barang->stock = $request->stock;
        $barang->satuan = $request->satuan;
        $barang->save();
    
        return redirect()->route('barang.store');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->merek = $request->merek;
        $barang->harga = $request->harga;
        $barang->stock = $request->stock;
        $barang->satuan = $request->satuan;
        $barang->update();
    
        return redirect()->route('barang.store');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
    
        return redirect()->route('barang.store')
            ->with('success', 'Data barang berhasil dihapus.');
    }
}
