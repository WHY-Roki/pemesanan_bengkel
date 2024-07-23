<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawaiList = Pegawai::all(); // Retrieve data from the database
        return view('pegawai.index', compact('pegawaiList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create'); //tambah
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'nama_pegawai' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'jabatan' => 'required|in:Teknisi,Admin,Spv',
            'status' => 'required|in:aktif,tidak_aktif',
        ]);
    
        $pegawai = new Pegawai();
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->alamat = $request->alamat;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->status = $request->status;
        $pegawai->save();
    
        return redirect()->route('pegawai.store');

         
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit',compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->alamat = $request->alamat;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->status = $request->status;
        $pegawai->update();
    
        return redirect()->route('pegawai.store');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
    
        return redirect()->route('pegawai.store')
            ->with('success', 'Data pegawai berhasil dihapus.');
    }
}
