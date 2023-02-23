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
        <div class="form-group">
          <label for="outlet_id">Outlet Id</label>
          <input type="text" name="outlet_id" class="form-control" id="inputNIS" 
          value="{{ $paket->outlet_id }}"disabled placeholder="Enter Nomer Induk Siswa"> 
        </div>
        <div class="form-group">
          <label>Jenis</label>
          <select class="form-control" name="jenis">
          <option value="L" disabled {{ $paket->jenis == "kiloan" ? "selected" : "" }}>Kiloan</option>
          <option value="P" disabled {{ $paket->jenis == "selimut" ? "selected" : "" }}>Selimut</option>
          <option value="L" disabled {{ $paket->jenis == "bed_cover" ? "selected" : "" }}>bed_cover</option>
          <option value="L" disabled {{ $paket->jenis == "kaos" ? "selected" : "" }}>kaos</option>
          </select>
      </div>
         <div class="form-group">
             <label for="harga_awal">Nama Paket</label>
             <input type="text" name="nama_paket" class="form-control" id="harga_awal" 
             value="{{$paket->nama_paket}}"disabled placeholder="Masukan harga awal">
           </div>
           <div class="form-group">
             <label for="harga_awal">Harga </label>
             <input type="text" name="harga" class="form-control" id="harga_awal" 
             value="{{$paket->harga}}"disabled placeholder="Masukan harga awal">
           </div>
           <a href="/paket" style="float:left" class="btn btn-info">Back</a>
       </div>
       <!-- /.card-body -->
       <div class="card-footer">
      </div>
     </form>
   </div>
 </div>
@endsection