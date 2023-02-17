@extends('master')

@section('content')

  <!-- left column -->
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Member</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Detail Outlet</label>
            <select class="form-control" aria-label="Default select example" name="id_member" >
              <option selected>Open This Select Menu</option>
              @forelse ($members as $member)
                  <option value="{{ $member->id }}">{{$member->nama}}</option>
              @empty
              <option value="" disabled>Tidak ada member</option>
              @endforelse
            </select>
          </div>
        </div>
    </div>
    <!-- /.card -->

  </div>
  <!--/.col (left) -->
  <!-- right column -->
  <div class="col-md-6">
    <!-- Form Element sizes -->
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Pilih Paket</h3>
      </div>
      <div class="card-body">
        <select class="form-control" aria-label="Default select example" name="id_paket" >
          <option selected>Open This Select Menu</option>
          @forelse ($pakets as $paket)
              <option value="{{ $paket->id }}">{{$paket->nama_paket}}</option>
          @empty
          <option value="" disabled>Tidak ada paket</option>
          @endforelse
        </select>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!--/.col (right) -->
</div>

@endsection