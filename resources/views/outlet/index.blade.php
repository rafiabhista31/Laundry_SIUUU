@extends('master')

@section('content')
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
  <a class="btn btn-info mr-3" href="/outlet/create">create</a>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <td class="td1">No</td>
        <td class="td5">Nama</td>
        <td class="td2">telepon</td>
        <td class="td3">Alamat</td>
        <td class="td4">Action</td>
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
</body>
</html>
@endsection