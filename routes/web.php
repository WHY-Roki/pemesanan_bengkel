<?php

use App\Http\Controllers\Barang\BarangController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Keluhan\KeluhanContorller;
use App\Http\Controllers\Kendaraan\KendaraanController;
use App\Http\Controllers\Pegawai\PegawaiController;
use App\Http\Controllers\Supplier\SupplierController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// data pegawai
Route::get('/pegawai',[PegawaiController::class,'index'])->name('pegawai.index');
Route::get('/pegawai/create',[PegawaiController::class,'create'])->name('pegawai.create');

Route::post('/pegawai',[PegawaiController::class,'store'])->name('pegawai.store');

Route::get('/pegawai{id}',[PegawaiController::class,'edit'])->name('pegawai.edit');
Route::post('/pegawai/update{id}',[PegawaiController::class,'update'])->name('pegawai.update');

Route::post('/pegawai/delete{id}',[PegawaiController::class,'delete'])->name('pegawai.delete');

//data customer
Route::get('/customer',[CustomerController::class,'index'])->name('customer.index');
Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');

Route::post('/customer',[CustomerController::class,'store'])->name('customer.store');

Route::get('/customer{id}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/update{id}',[CustomerController::class,'update'])->name('customer.update');

Route::post('/customer/delete{id}',[CustomerController::class,'delete'])->name('customer.delete');

//data kendaraan
Route::get('/kendaraan',[KendaraanController::class,'index'])->name('kendaraan.index');
Route::get('/kendaraan/create',[KendaraanController::class,'create'])->name('kendaraan.create');

Route::post('/kendaraan',[KendaraanController::class,'store'])->name('kendaraan.store');

Route::get('/kendaraan{id}',[KendaraanController::class,'edit'])->name('kendaraan.edit');
Route::post('/kendaraan/update{id}',[KendaraanController::class,'update'])->name('kendaraan.update');

Route::post('/kendaraan/delete{id}',[KendaraanController::class,'delete'])->name('kendaraan.delete');

//data kendaraan
Route::get('/supplier',[SupplierController::class,'index'])->name('supplier.index');
Route::get('/supplier/create',[SupplierController::class,'create'])->name('supplier.create');

Route::post('/supplier',[SupplierController::class,'store'])->name('supplier.store');

Route::get('/supplier{id}',[SupplierController::class,'edit'])->name('supplier.edit');
Route::post('/supplier/update{id}',[SupplierController::class,'update'])->name('supplier.update');

Route::post('/supplier/delete{id}',[SupplierController::class,'delete'])->name('supplier.delete');

//data barang
Route::get('/barang',[BarangController::class,'index'])->name('barang.index');
Route::get('/barang/create',[BarangController::class,'create'])->name('barang.create');

Route::post('/barang',[BarangController::class,'store'])->name('barang.store');

Route::get('/barang{id}',[BarangController::class,'edit'])->name('barang.edit');
Route::post('/barang/update{id}',[BarangController::class,'update'])->name('barang.update');

Route::post('/barang/delete{id}',[BarangController::class,'delete'])->name('barang.delete');

//data keluhan
Route::get('/keluhan',[KeluhanContorller::class,'index'])->name('keluhan.index');
Route::get('/keluhan/create',[KeluhanContorller::class,'create'])->name('keluhan.create');

Route::post('/keluhan',[KeluhanContorller::class,'store'])->name('keluhan.store');

Route::get('/keluhan{id}',[KeluhanContorller::class,'edit'])->name('keluhan.edit');
Route::post('/keluhan/update{id}',[KeluhanContorller::class,'update'])->name('keluhan.update');

Route::post('/keluhan/delete{id}',[KeluhanContorller::class,'delete'])->name('keluhan.delete');