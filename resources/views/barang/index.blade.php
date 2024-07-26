@extends('layout')

@section('konten')

<div class="d-flex">
    <div class="ms-auto">
      <a class="btn btn-success" href="{{ route('barang.create') }}"> Tambah Data barang</a>
    </div>
</div>

<h3>Data Barang Bengkel Abadi Jaya</h3>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Merek</th>
        <th>Harga</th>
        <th>Stock</th>
        <th>Satuan</th>
    </tr>
    <tbody>
        @foreach ($barangList as $no=>$barang)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->merek }}</td>
                <td>{{ $barang->harga }}</td>
                <td>{{ $barang->stock }}</td>
                <td>{{ $barang->satuan }}</td>
                <td>
                    <form action="{{ route('barang.delete', $barang->id) }}" method="post">
                        <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        @csrf
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                   
                </td>
            </tr>
        @endforeach
    </tbody> 
</table>


@endsection 
