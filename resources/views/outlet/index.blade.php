@extends('master')

@section('content')


  <h1 class="he">Paket Index</h1>
  <a class="btn btn-info mr-3" href="/outlet/create">create</a>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <td class="td1">No</td>
        <td class="td5">Nama</td>
        <td class="td2">Alamat</td>
        <td class="td3">No Telpon</td>
        <td class="td3">Action</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($outlet as $outlet)
        <th class="th1">{{ $loop->iteration}}</th>
        <td class="th2">{{ $outlet->nama }}</td>
        <td class="th3">{{ $outlet->alamat }}</td>
        <td class="th2">{{ $outlet->tlp }}</td>
        <td class="th4">
        <form action="{{route ('outlet.destroy', [$outlet->id])}}" method="POST">
        <a class="btn btn-info mr-3" href="outlet/{{ $outlet->id }}">DETAIL</a>
        <a class="btn btn-warning mr-3" href="outlet/{{ $outlet->id}}/edit">EDIT</a>
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="hapus azza">
        </td>
      </tr>
    </tr>
    </tbody>
    @endforeach
</table>
</div>

@endsection