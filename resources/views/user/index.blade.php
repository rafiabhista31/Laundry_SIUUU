@extends('master')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between mb-3">
        <a href="/user/create" class="btn btn-primary">Tambah Operator</a>
      </div>
    <!-- /.card-header -->
      <div class="card-body">
        <table table id="example2" class="table table-bordered table-hover" class="datatable">
          <thead>
            <tr>
              <th class="th1">NO</th>
              <th class="th2">Nama User</th>
              <th class="th3">Username</th>
              <th class="th3">Otoritas</th>
              <th class="th3"> <center>Action</center></th>
            </tr>
          </thead>
          <tbody>
            <tr>
            @forelse ($users as $user)
            <tr>
              <td >{{ $loop -> iteration }}</td>
              <td >{{ $user->nama }}</td>
              <td >{{ $user->username }}</td>
              <td >{{ $user->role }}</td>
              <td> <center>
                <form action="{{route('user.destroy', $user->id)}}" method="POST">
                  <a class="btn btn-warning mr-3" href="{{route('user.edit', $user->id)}}">
                    <i class="fas fa-edit"></i>
                    Edit
                  </a>
                  @csrf
                  @method('DELETE')
                  <input type="submit" class="btn btn-danger" value="Delete">
                </form>
                </center>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" style="text-align: center" class="text-danger"><strong> Data Barang Kosong</strong></td>
            @endforelse ($users as $user)
          </tbody>
        </table>
    </div>
  </div>
    <!-- /.card-body -->
</div>
</div>
@endsection