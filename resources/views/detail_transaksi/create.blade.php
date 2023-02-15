@extends('master')

@section('content')
<div class="col-md-12">
  <div class="card card-primary">
     <div class="card-header">
       <h3 class="card-title">Masukan Data Barang</h3>
     </div>
     <!-- /.card-header -->
     <!-- form start -->
     <form action="/transaksi" method="POST">
         @csrf
       <div class="card-body">
        <label>Outlet Id</label>
         <select class="form-select" aria-label="Default select example" name="outlet_id" >
          <option selected>Open this select menu</option>
          @foreach ($transaksi as $item)
          <option value="{{ $item->id}}">{{ $item->kode_invoice }}</option>
          @endforeach
        </select>
        <div class="form-group">
          <label>Paket Id</label>
          <select class="form-select" aria-label="Default select example" name="member_id" >
            <option selected>Open this select menu</option>
              @foreach ($paket as $item)
            <option value="{{ $item->id}}">{{ $item->id }}</option>
              @endforeach
          </select>
         </div>
              <div class="form-group">
                <label for="harga_awal">Quantity</label>
                <input type="number" name="qty" class="form-control" id="Tanggal" placeholder="Tanggal">
              </div>
       </div>
       <!-- /.card-body -->
       <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button> 
       </div>
     </form>
   </div>
 </div>
@endsection