<?php

namespace App\Http\Controllers\Kendaraan;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraanList = Kendaraan::all(); // Retrieve data from the database
        return view('kendaraan.index', compact('kendaraanList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kendaraan.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'no_pol' => 'required',
            'no_mesin' => 'required',
            'merek' => 'required|in:honda,yamaha,suzuki,kawasaki,lainnya',
            'warna' => 'required|in:Putih,Hitam,Hijau,Biru,Merah,lainnya',
        ]);
    
        $kendaraan = new Kendaraan();
        $kendaraan->no_pol = $request->no_pol;
        $kendaraan->no_mesin = $request->no_mesin;
        $kendaraan->merek = $request->merek;
        $kendaraan->warna = $request->warna;
        $kendaraan->save();
    
        return redirect()->route('kendaraan.store');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kendaraan = Kendaraan::find($id);
        return view('kendaraan.edit',compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kendaraan = Kendaraan::find($id);
        $kendaraan->no_pol = $request->no_pol;
        $kendaraan->no_mesin = $request->no_mesin;
        $kendaraan->merek = $request->merek;
        $kendaraan->warna = $request->warna;
        $kendaraan->update();
    
        return redirect()->route('kendaraan.store');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $kendaraan = Kendaraan::find($id);
        $kendaraan->delete();
    
        return redirect()->route('kendaraan.store')
            ->with('success', 'Data kendaraan berhasil dihapus.');
    }
}
