@extends('master')

@section('content')

<div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Table Transaksi</h4>
      <p class="card-description">
        Lihat Transaksi
      </p>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Outlet</th>
              <th>Nama Kamu</th>
              <th>Status</th>
              <th>Nama User</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                @foreach($transaksis as $trx)
                <th class="th1">{{ $loop->iteration}}</th>
                <td>{{$trx->outlet->nama}}</td>
                <td>{{$trx->member->nama}}</td>
                <td><label class="badge badge-info">{{$trx->status}}</label></td>
                <td>{{$trx->user->username}}</td>
                <td>
                  <form action="{{route ('transaksi.destroy', [$trx->id])}}" method="POST">
                  <a class="btn btn-warning mr-3" href="transaksi/{{ $trx->id}}/edit">EDIT</a>
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger" value="hapus azza">
                </td>
              </tr>
          </tbody>
        @endforeach
      </table>
      </div>
    </div>
  </div>
</div>
ㅤ
@endsection