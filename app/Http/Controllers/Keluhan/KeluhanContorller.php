<?php

namespace App\Http\Controllers\Keluhan;

use App\Http\Controllers\Controller;
use App\Models\Keluhan;
use Illuminate\Http\Request;

class KeluhanContorller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keluhanList = Keluhan::all(); // Retrieve data from the database
        return view('keluhan.index', compact('keluhanList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keluhan.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_keluhan' => 'required',
            'ongkos' => 'required',
            
        ]);
    
        $keluhan = new Keluhan();
        $keluhan->nama_keluhan = $request->nama_keluhan;
        $keluhan->ongkos = $request->ongkos;

        $keluhan->save();
    
        return redirect()->route('keluhan.store');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $keluhan = Keluhan::find($id);
        return view('keluhan.edit',compact('keluhan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $keluhan = Keluhan::find($id);
        $keluhan->nama_keluhan = $request->nama_keluhan;
        $keluhan->ongkos = $request->ongkos;

        $keluhan->update();
    
        return redirect()->route('keluhan.store');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $keluhan = Keluhan::find($id);
        $keluhan->delete();
    
        return redirect()->route('keluhan.store')
            ->with('success', 'Data keluhan berhasil dihapus.');
    }
}
