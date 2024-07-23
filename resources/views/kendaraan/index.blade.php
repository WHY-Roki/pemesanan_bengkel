@extends('layout')

@section('konten')

<div class="d-flex">
    <div class="ms-auto">
      <a class="btn btn-success" href="{{ route('kendaraan.create') }}"> Add Data kendaraan</a>
    </div>
</div>

<h3>Data kendaraan</h3>
<table class="table">
    <tr>
        <th>No</th>
        <th>No Polisi</th>
        <th>No Mesin</th>
        <th>Merek</th>
        <th>Warna</th>
    </tr>
    <tbody>
        @foreach ($kendaraanList as $no=>$kendaraan)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $kendaraan->no_pol }}</td>
                <td>{{ $kendaraan->no_mesin }}</td>
                <td>{{ $kendaraan->merek }}</td>
                <td>{{ $kendaraan->warna }}</td>
                <td>
                    <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('kendaraan.delete', $kendaraan->id) }}" method="post">
                        @csrf
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                   
                </td>
            </tr>
        @endforeach
    </tbody> 
</table>


@endsection 