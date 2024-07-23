@extends('layout')

@section('konten')

<h4>Edit Data Supplier</h4>

<form action="{{ route('supplier.update' , $supplier->id) }}" method="post">
  @csrf
  <label for="nama_supplier" class="form-label">Nama supplier</label>
  <input type="text" class="form-control" value="{{ $supplier->nama_supplier }}" id="nama_supplier" name="nama_supplier">

  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" id="alamat" value="{{ $supplier->alamat }}" name="alamat" rows="3"></textarea>

  <label for="nama_supplier" class="form-label">No Hp</label>
  <input type="int" class="form-control" value="{{ $supplier->no_hp }}" id="no_hp" name="no_hp">

  <button type="submit" class="btn btn-primary">Edit</button>

</form>



@endsection