<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplierList = Supplier::all(); // Retrieve data from the database
        return view('supplier.index', compact('supplierList'));
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
        $validate = $request->validate([
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);
    
        $supplier = new Supplier();
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->alamat = $request->alamat;
        $supplier->no_hp = $request->no_hp;
        $supplier->save();
    
        return redirect()->route('supplier.store');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('supplier.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->alamat = $request->alamat;
        $supplier->no_hp = $request->no_hp;
        $supplier->update();
    
        return redirect()->route('supplier.store');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
    
        return redirect()->route('supplier.store')
            ->with('success', 'Data supplier berhasil dihapus.');
    }
}
