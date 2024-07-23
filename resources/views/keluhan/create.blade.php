@extends('layout')

@section('konten')

<h4>Add Data Keluhan</h4>

<form action="{{ route('keluhan.store') }}" method="post">
  @csrf
  <label for="nama_keluhan" class="form-label">Nama keluhan</label>
  <input type="text" class="form-control" id="nama_keluhan" name="nama_keluhan">

  <label for="ongkos" class="form-label">Biaya</label>
  <input type="int" class="form-control" id="ongkos" name="ongkos">

  <button type="submit" class="btn btn-primary">Simpan</button>

</form>



@endsection