@extends('layout')

@section('konten')

<div class="d-flex">
    <div class="ms-auto">
      <a class="btn btn-success" href="{{ route('supplier.create') }}"> Add Data supplier</a>
    </div>
</div>

<h3>Data supplier</h3>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nama supplier</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Aksi</th>
    </tr>
    <tbody>
        @foreach ($supplierList as $no=>$supplier)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $supplier->nama_supplier }}</td>
                <td>{{ $supplier->alamat }}</td>
                <td>{{ $supplier->no_hp }}</td>
                <td>
                    <form action="{{ route('supplier.delete', $supplier->id) }}" method="post">
                        <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        @csrf
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                   
                </td>
            </tr>
        @endforeach
    </tbody> 
</table>


@endsection 
