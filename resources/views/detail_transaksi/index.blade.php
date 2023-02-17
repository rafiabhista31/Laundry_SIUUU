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
  <a class="btn btn-info mr-3" href="/detailtransaksi/create">create</a>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <td class="td1">No</td>
        <td class="td5">Transaksi Id</td>
        <td class="td2">Paket Id</td>
        <td class="td3">Quantity</td>
        <td class="td4">Action</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($detailTransaksi as $transaksi)
        <th class="th1">{{ $loop->iteration}}</th>
        <td class="th2">{{ $detailTransaksi->transaksi_id }}</td>
        <td class="th3">{{ $detailTransaksi->paket_id }}</td>
        <td class="th2">{{ $detailTransaksi->qty }}</td>
        <td class="th4">
        {{-- <form action="{{route ('transaksi.destroy', [$transaksi->id])}}" method="POST">
        <a class="btn btn-info mr-3" href="transaksi/{{ $transaksi->id }}">DETAIL</a>
        <a class="btn btn-warning mr-3" href="transaksi/{{ $transaksi->id}}/edit">EDIT</a>
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="hapus azza"> --}}
        </td>
      </tr>
    </tr>
    </tbody>
  </table>
    @endforeach
</body>
</html>
@endsection