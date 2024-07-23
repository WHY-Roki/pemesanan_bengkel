@extends('layout')

@section('konten')

<h4>Edit Barang</h4>

<form action="{{ route('barang.update' , $barang->id) }}" method="post">
  @csrf
  <label for="nama_barang" class="form-label">Nama barang</label>
  <input type="text" class="form-control" value="{{ $barang->nama_barang }}" id="nama_barang" name="nama_barang">

  <label for="merek" class="form-label">Merek</label>
  <input type="text" class="form-control" value="{{ $barang->merek }}" id="merek" name="merek">

  <label for="harga" class="form-label">Harga</label>
  <input type="int" class="form-control" value="{{ $barang->harga }}" id="harga" name="harga">

  <label for="stock" class="form-label">Stock</label>
  <input type="int" class="form-control" value="{{ $barang->stock }}" id="stock" name="stock">

  <label for="satuan" class="form-label">Satuan</label>
  <input type="int" class="form-control" value="{{ $barang->satuan }}" id="satuan" name="satuan">

  <button type="submit" class="btn btn-primary">Edit</button>

</form>



@endsection