@extends('layout')

@section('konten')

<h4>Add Data Supplier</h4>

<form action="{{ route('supplier.store') }}" method="post">
  @csrf
  <label for="nama_supplier" class="form-label">Nama supplier</label>
  <input type="text" class="form-control" id="nama_supplier" name="nama_supplier">

  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>

  <label for="no_hp" class="form-label">No Hp</label>
  <input type="int" class="form-control" id="no_hp" name="no_hp">

  <button type="submit" class="btn btn-primary">Simpan</button>

</form>



@endsection