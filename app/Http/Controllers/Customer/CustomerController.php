<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customerList = Customer::all(); // Retrieve data from the database
        return view('customer.index', compact('customerList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_customer' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
        ]);
    
        $customer = new Customer();
        $customer->nama_customer = $request->nama_customer;
        $customer->alamat = $request->alamat;
        $customer->jenis_kelamin = $request->jenis_kelamin;;
        $customer->save();
    
        return redirect()->route('customer.store');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->nama_customer = $request->nama_customer;
        $customer->alamat = $request->alamat;
        $customer->jenis_kelamin = $request->jenis_kelamin;
        $customer->update();
    
        return redirect()->route('customer.store');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
    
        return redirect()->route('customer.store')
            ->with('success', 'Data customer berhasil dihapus.');
    }
}
