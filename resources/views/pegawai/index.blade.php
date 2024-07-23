@extends('layout')

@section('konten')

<div class="d-flex">
    <div class="ms-auto">
      <a class="btn btn-success" href="{{ route('pegawai.create') }}"> Tambah Data Pegawai</a>
    </div>
</div>

<h3>Data Pegawai Bengkel Abadi Jaya</h3>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Pegawai</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Jabatan</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <tbody>
        @foreach ($pegawaiList as $no=>$pegawai)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $pegawai->nama_pegawai }}</td>
                <td>{{ $pegawai->alamat }}</td>
                <td>{{ $pegawai->jenis_kelamin }}</td>
                <td>{{ $pegawai->jabatan }}</td>
                <td>{{ $pegawai->status }}</td>
                <td>
                    <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('pegawai.delete', $pegawai->id) }}" method="post">
                        @csrf
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                   
                </td>
            </tr>
        @endforeach
    </tbody> 
</table>


@endsection 