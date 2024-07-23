@extends('layout')

@section('konten')

<h4>Create Barang</h4>

<form action="{{ route('barang.store') }}" method="post">
  @csrf
  <label for="nama_barang" class="form-label">Nama barang</label>
  <input type="text" class="form-control" id="nama_barang" name="nama_barang">

  <label for="merek" class="form-label">Merek</label>
  <input type="int" class="form-control" id="merek" name="merek">

  <label for="harga" class="form-label">Harga</label>
  <input type="int" class="form-control" id="harga" name="harga">

  <label for="stock" class="form-label">Stock</label>
  <input type="int" class="form-control" id="stock" name="stock">

  <label for="satuan" class="form-label">Satuan</label>
  <input type="int" class="form-control" id="satuan" name="satuan">

  <button type="submit" class="btn btn-primary">Simpan</button>

</form>



@endsection