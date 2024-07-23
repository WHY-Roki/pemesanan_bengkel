@extends('layout')

@section('konten')

<h4>Edit Data Keluhan</h4>

<form action="{{ route('keluhan.update' , $keluhan->id) }}" method="post">
  @csrf
  <label for="nama_keluhan" class="form-label">Nama keluhan</label>
  <input type="text" class="form-control" value="{{ $keluhan->nama_keluhan }}" id="nama_keluhan" name="nama_keluhan">

  <label for="ongkos" class="form-label">Biaya</label>
  <input type="int" class="form-control" value="{{ $keluhan->ongkos }}" id="ongkos" name="ongkos">

  <button type="submit" class="btn btn-primary">Edit</button>

</form>



@endsection