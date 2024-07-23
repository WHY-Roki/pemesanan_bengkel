@extends('layout')

@section('konten')

<h4>Edit Data Customer</h4>

<form action="{{ route('customer.update' , $customer->id) }}" method="post">
  @csrf
  <label for="nama_customer" class="form-label">Nama customer</label>
  <input type="text" class="form-control" value="{{ $customer->nama_customer }}" id="nama_customer" name="nama_customer">

  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" id="alamat" value="{{ $customer->alamat }}" name="alamat" rows="3"></textarea>

  <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
  <select class="form-select" id="jenis_kelamin" value="{{ $customer->jenis_kelamin }}" name="jenis_kelamin">
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
  </select>

  <button type="submit" class="btn btn-primary">Edit</button>

</form>



@endsection