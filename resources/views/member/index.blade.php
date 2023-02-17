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
  <a class="btn btn-info mr-3" href="/member/create">create</a>
<div class="table-bordered">
  <table class="table">
    <thead>
      <tr>
        <td class="td1">No</td>
        <td class="td5">Nama</td>
        <td class="td2">telepon</td>
        <td class="td3">Alamat</td>
        <td class="td4">Jenis Kelamin</td>
        <td class="td4">Action</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($member as $member)
        <th class="th1">{{ $loop->iteration}}</th>
        <td class="th2">{{ $member->nama }}</td>
        <td class="th3">{{ $member->alamat }}</td>
        <td class="th2">{{ $member->tlp }}</td>
        <td class="th2">{{ $member->jenis_kelamin }}</td>
        <td class="th4">
        <form action="{{route ('member.destroy', [$member->id])}}" method="POST">
        <a class="btn btn-info mr-3" href="member/{{ $member->id }}">DETAIL</a>
        <a class="btn btn-warning mr-3" href="member/{{ $member->id}}/edit">EDIT</a>
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