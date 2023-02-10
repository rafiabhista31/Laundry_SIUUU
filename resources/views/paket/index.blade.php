@extends('master')

@section('content')
<style>
  .th1,.th2,.th3,.th4{
    color:#fff
  }

  .td1,.td2,.td3,.td4,.td5{
    color:#fff
  }

  .he{
    color:#fff
  }


</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1 class="he">INDECK NICH!!!</h1>
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
        <td class="th2">{{ $paket->outlet_id }}</td>
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
</body>
</html>
@endsection