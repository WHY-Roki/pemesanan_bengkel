@extends('layout')

@section('konten')

<h4>Add Data Kendaraan</h4>

<form action="{{ route('kendaraan.store') }}" method="post">
    @csrf
    <label for="no_pol" class="form-label">No Polisi</label>
    <input type="text" class="form-control" id="no_pol" name="no_pol">
  
    <label for="no_mesin" class="form-label">No Mesin</label>
    <textarea class="form-control" id="no_mesin" name="no_mesin" rows="3"></textarea>
  
    <label for="merek" class="form-label">Merek</label>
    <select class="form-select" id="merek" name="merek">
        <option value="honda">HONDA</option>
        <option value="yamaha">YAMAHA</option>
        <option value="suzuki">SUZUKI</option>
        <option value="kawasaki">KAWASAKI</option>
        <option value="lainnya">Merek Lainnya</option>
    </select>
    <label for="warna" class="form-label">Warna</label>
    <select class="form-select" id="warna" name="warna">
        <option value="Putih">PUTIH</option>
        <option value="Hitam">HITAM</option>
        <option value="Hijau">HIJAU</option>
        <option value="Biru">BIRU</option>
        <option value="Merah">MERAH</option>
        <option value="lainnya">Warna Lainnya</option>«
    </select>

  <button type="submit" class="btn btn-primary">Simpan</button>

</form>



@endsection