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
  <a class="btn btn-info mr-3" href="/outlet/create">create</a>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <td class="td1">No</td>
        <td class="td5">Outlet Id</td>
        <td class="td2">Kode Invoice</td>
        <td class="td3">Member Id</td>
        <td class="td4">Tanggal</td>
        <td class="td5">Batas Waktu</td>
        <td class="td2">Biaya Tambahan</td>
        <td class="td3">Diskon</td>
        <td class="td4">Pajak</td>
        <td class="td3">Status</td>
        <td class="td4">Dibayar</td>
        <td class="td4">User Id</td>
        <td class="td4">Action</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($transaksi as $transaksi)
        <th class="th1">{{ $loop->iteration}}</th>
        <td class="th2">{{ $transaksi->outlet_id }}</td>
        <td class="th3">{{ $transaksi->kode_invoice }}</td>
        <td class="th2">{{ $transaksi->member_id }}</td>
        <td class="th2">{{ $transaksi->tgl }}</td>
        <td class="th2">{{ $transaksi->batas_waktu }}</td>
        <td class="th3">{{ $transaksi->tgl_bayar }}</td>
        <td class="th2">{{ $transaksi->biaya_tambahan }}</td>
        <td class="th2">{{ $transaksi->diskon }}</td>
        <td class="th2">{{ $transaksi->pajak }}</td>
        <td class="th2">{{ $transaksi->status }}</td>
        <td class="th2">{{ $transaksi->dibayar }}</td>
        <td class="th2">{{ $transaksi->user_id }}</td>
        <td class="th4">
        <form action="{{route ('transaksi.destroy', [$transaksi->id])}}" method="POST">
        <a class="btn btn-info mr-3" href="{{ $transaksi->id }}">DETAIL</a>
        <a class="btn btn-warning mr-3" href="{{ $transaksi->id}}/edit">EDIT</a>
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