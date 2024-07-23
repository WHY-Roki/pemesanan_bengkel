@extends('layout')

@section('konten')

<h4>Add Data Customer</h4>

<form action="{{ route('customer.store') }}" method="post">
  @csrf
  <label for="nama_customer" class="form-label">Nama customer</label>
  <input type="text" class="form-control" id="nama_customer" name="nama_customer">

  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>

  <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
  <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
  </select>

  <button type="submit" class="btn btn-primary">Simpan</button>

</form>



@endsection