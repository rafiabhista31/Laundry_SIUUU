@extends('master')

@section('content')
<div class="col-md-12">
  <div class="card card-primary">
     <div class="card-header">
       <h3 class="card-title">Masukan Data Barang</h3>
     </div>
     <!-- /.card-header -->
     <!-- form start -->
     <form action="/paket" method="POST">
         @csrf
       <div class="card-body">
         <div class="form-group" >
          <label>Outlet ID</label>
            <select class="form-select" aria-label="Default select example" name="outlet_id" >
            <option selected>Open this select menu</option>
            @foreach ($outlet as $item)
            <option value="{{ $item->id}}">{{ $item->nama }}</option>
            @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Jenis</label>
            <select class="form-select" aria-label="Default select example" name="jenis" >
            <option selected>Open this select menu</option>
            <option value="kiloan">Kiloan</option>
            <option value="selimut">Selimut</option>
            <option value="bed_cover">Bed Cover</option>
            <option value="kaos">Kaos</option>
            <option value="jenis">Jenis</option>
          </select>
          </div>
         <div class="form-group">
             <label for="harga_awal">Nama Paket</label>
             <input type="text" name="nama_paket" class="form-control" id="harga_awal" placeholder="Masukan harga awal">
           </div>
           <div class="form-group">
             <label for="harga_awal">Harga </label>
             <input type="text" name="harga" class="form-control" id="harga_awal" placeholder="Masukan harga awal">
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