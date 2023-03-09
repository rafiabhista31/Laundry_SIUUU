@extends('master')

@section('content')
    
  <div class="col-md-12">
    <!-- Form Element sizes -->
    <div class="card card-success">
      <div class="card-body">
        <form action="{{ route('transaksi.detail.store', request()->segment(2)) }}" method="post">
          @csrf
          <div class="row">
            <div class="form-group col-md-8">
              <select name="paket_id" id="paket_id" class="form-control">
                <option selected disabled>--Pilih Data Paket--</option>
                @forelse ($pakets as $paket)
                  <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>                  
                @empty
                  <option selected disabled>Tidak Ada Paket Tersedia</option>
                @endforelse
              </select>
              @error('id_paket')
                <div class="text-danger small">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group  col-md-2">
              <input type="number" name="qty" id="qty" class="form-control" placeholder="Isi Qty">
              @error('qty')
                <div class="text-danger small">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group  col-md-2">
              <input type="submit" value="Tambah" class="btn btn-success form-control">
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

  <br>

    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Data Member</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
            <!-- /.card-header -->
              <table id="example2" class="table table-bordered table-hover">
                <thead>
            <tr>
                <td class="td1">No</td>
                <td class="td3">No Transaksi</td>
                <td class="td3">Nama Paket</td>
                <td class="td3">Qty</td>
            </tr>
                </thead>
                <tbody>
                    <tr>
                  @forelse($details as $dt)
                  <th class="th1">{{ $loop->iteration}}</th>
                    <td class="th2">{{ $dt->transaksi_id}}</td>
                    <td class="th2">{{ $dt->paket->nama_paket}}</td>
                    <td class="th2">{{ $dt->qty}}</td>
                 </tr>
                 @empty
                 <tr>
                  <td>Data Masih Kosong</td>
                </tr>
                @endforelse
              </table>
            </div>
      <!-- /.card -->
  
    </div>
    <!--/.col (left) -->
    <!-- right column -->
    <!--/.col (right) -->
  <br><br>
@endsection