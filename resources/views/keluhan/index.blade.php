@extends('layout')

@section('konten')

<div class="d-flex">
    <div class="ms-auto">
      <a class="btn btn-success" href="{{ route('keluhan.create') }}"> Add Data keluhan</a>
    </div>
</div>

<h3>Data keluhan</h3>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nama Keluhan</th>
        <th>Biaya</th>
        <th>Aksi</th>
    </tr>
    <tbody>
        @foreach ($keluhanList as $no=>$keluhan)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $keluhan->nama_keluhan }}</td>
                <td>{{ $keluhan->ongkos }}</td>

                <td>                    
                    <form action="{{ route('keluhan.delete', $keluhan->id) }}" method="post">
                        <a href="{{ route('keluhan.edit', $keluhan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        @csrf
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                   
                </td>
            </tr>
        @endforeach
    </tbody> 
</table>


@endsection 
