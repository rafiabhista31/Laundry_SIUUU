@extends('master')

@section('content')
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
        <td class="td4">Tanggal</td>
        <td class="td3">Status</td>
        <td class="td4">Dibayar</td>
        <td class="td4">Action</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($transaksi as $transaksi)
        <th class="th1">{{ $loop->iteration}}</th>
        <td class="th2">{{ $transaksi->outlet_id }}</td>
        <td class="th3">{{ $transaksi->kode_invoice }}</td>
        <td class="th2">{{ $transaksi->tgl }}</td>
        <td class="th2">{{ $transaksi->status }}</td>
        <td class="th2">{{ $transaksi->dibayar }}</td>
        <td class="th4">
        <form action="{{route ('transaksi.destroy', [$transaksi->id])}}" method="POST">
        <a class="btn btn-info mr-3" href="transaksi/{{ $transaksi->id }}">DETAIL</a>
        <a class="btn btn-warning mr-3" href="transaksi/{{ $transaksi->id}}/edit">EDIT</a>
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