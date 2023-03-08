@extends('master')

@section('content')

<div class="card">
  <div class="card-body">
  <h1 class="he">Paket Index</h1>
  <a class="btn btn-info mr-3" href="/paket/create">create</a>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <td class="td1">No</td>
        <td class="td5">Outlet Id</td>
        <td class="td2">Jenis</td>
        <td class="td3">Nama Paket</td>
        <td class="td4">Harga</td>
        <td class="td4">Action</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($paket as $paket)
        <th class="th1">{{ $loop->iteration}}</th>
        <td class="th2">{{ $paket->outlet->nama }}</td>
        <td class="th3">{{ $paket->jenis }}</td>
        <td class="th2">{{ $paket->nama_paket }}</td>
        <td class="th2">{{ $paket->harga }}</td>
        <td class="th4">
        <form action="{{route ('paket.destroy', [$paket->id])}}" method="POST">
        <a class="btn btn-info mr-3" href="paket/{{ $paket->id }}">DETAIL</a>
        <a class="btn btn-warning mr-3" href="paket/{{ $paket->id}}/edit">EDIT</a>
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
  </div>
</div>
@endsection