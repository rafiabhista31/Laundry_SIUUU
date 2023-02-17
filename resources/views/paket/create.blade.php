@extends('master')


@section('judul')

    
@endsection

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
          <label>nama Outlet</label>
             <select class="form-control" aria-label="Default select example" name="outlets_id" >
             <option selected>Open this select menu</option>
             @foreach ($outlet as $item)
             <option value="{{ $item->id}}">{{ $item->nama. ' | '.$item->alamat}}</option>
             @endforeach
             </select>
            </div>
            <div class="form-group" >
              <label>nama Outlet</label>
                 <select class="form-control" aria-label="Default select example" name="outlets_id" >
                  <option selected>Open this select menu</option>
                  <option value="kiloan">Kiloan</option>
                  <option value="selimut">Selimut</option>
                  <option value="bed_cover">Bed Cover</option>
                  <option value="kaos">Kaos</option>
                  <option value="jenis">Lain</option>
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