@extends('layout')

@section('konten')

<h4>Create Pegawai</h4>

<form action="{{ route('pegawai.store') }}" method="post">
  @csrf
  <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
  <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai">

  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>

  <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
  <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
  </select>

  <label for="jabatan" class="form-label">Jabatan</label>
  <select class="form-select" id="jabatan" name="jabatan">
      <option value="Teknisi">Teknisi</option>
      <option value="P">Admin</option>
      <option value="P">Spv</option>
  </select>

  <label for="status" class="form-label">Status</label>
  <select class="form-select" id="status" name="status">
      <option value="aktif">Aktif</option>
      <option value="tidak_aktif">Tidak Aktif</option>
  </select>

  <button type="submit" class="btn btn-primary">Simpan</button>

</form>



@endsection