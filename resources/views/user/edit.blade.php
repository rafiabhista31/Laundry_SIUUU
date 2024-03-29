@extends('master')

@section('content')

<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">EDIT DATA USER</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('user.update', [$users->id])}}" method="POST">
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="row">
          <div class="col-md-8 col-12">
            <div class="form-group">
              <label for="username">Nama User</label>
              <input type="text" name="nama" class="form-control" id="username" value="{{$users->nama}}">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control" id="username" value="{{$users->username}}">
            </div>
            <div class="form-group">
              <label for="username">Password</label>
              <input type="text" name="password" class="form-control" id="username" value="{{$users->password}}">
            </div>
          </div>  
          <div class="col-md-4 col-12">
            <div class="form-group">
                <label for="level">Otoritas</label>
                  <select name="role" id="role" class="form-select form-control" data-parsley-required>
                    <option value="" disabled><strong>PILIH ROLE</strong></option>
                    <option value="admin">Admin</option>
                    <option value="owner">Owner</option>
                    <option value="kasir">Kasir</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="level">Outlet Id</label>
                  <select class="form-control" aria-label="Default select example" name="outlet_id">
              @foreach ($outlet as $item)
                <option value="{{ $item->id }}" {{ $item->id == $users->outlet_id ? 'selected' : '' }}>
                  {{ $item->nama .' | '. $item->alamat }}
                </option>
              @endforeach
            </select>
            </div>
          </div>
          </div>
          <div class="row">
          </div>
        </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <div class="row">
          <div class="col-md-6 d-flex justify-content-start">
            <button type="submit" class="btn btn-primary">Submit</button> 
          </div>
          @if (auth()->user()->role == 'admin')
          <div class="col-md-6 d-flex justify-content-end">
            <a href="/dashboard/admin" class="btn btn-outline-info">
              Kembali
            </a>
          </div>
          @endif
          @if (auth()->user()->role == 'kasir')
          <div class="col-md-6 d-flex justify-content-end">
            <a href="/dashboard/kasir" class="btn btn-outline-info">
              Kembali
            </a>
          </div>
          @endif
      </div>
      </div>
    </form>
  </div>
</div>
@endsection