@extends('layout')

@section('konten')

<div class="d-flex">
    <div class="ms-auto">
      <a class="btn btn-success" href="{{ route('customer.create') }}"> Add Data Customer</a>
    </div>
</div>

<h3>Data customer</h3>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Customer</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Aksi</th>
    </tr>
    <tbody>
        @foreach ($customerList as $no=>$customer)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $customer->nama_customer }}</td>
                <td>{{ $customer->alamat }}</td>
                <td>{{ $customer->jenis_kelamin }}</td>
                <td>              
                    <form action="{{ route('customer.delete', $customer->id) }}" method="post">
                        <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        @csrf
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                   
                </td>
            </tr>
        @endforeach
    </tbody> 
</table>


@endsection 
