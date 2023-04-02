@extends('master')

@section('content')
    
<form action="{{route ('paket.update', [$paket->id])}}" method="POST">
  @csrf
  @method("PUT")
<div class="col-md-12">
  <div class="card card-primary">
     <div class="card-header">
       <h3 class="card-title">Masukan Data Barang</h3>
     </div>
       <div class="card-body">
            <div class="form-group" >
              <label>Id Outlet</label>
              <select class="form-control" aria-label="Default select example" name="outlet_id" value="{{$paket->outlet_id}}" >
              <option selected>Open this select menu</option>
              @foreach ($outlet as $item)
              <option value="{{ $item->id}}">{{ $item->nama .' | '. $item->alamat }}</option>
              @endforeach
              </select>
           </div>
          <div class="form-group">
          <label>Jenis</label>
          <select class="form-control" name="jenis" id="Jenis" value="{{$paket->jenis}}">
            <option selected>Pilih jenis</option>
            <option value="kiloan">Kiloan</option>
            <option value="selimut">Selimut</option>
            <option value="bed_cover">Bed Cover</option>
            <option value="kaos">Kaos</option>
            <option value="lain">lainnya</option>
          </select>
          </div>
         <div class="form-group">
             <label for="harga_awal">Nama Paket</label>
             <input type="text" name="nama_paket" class="form-control" id="harga_awal" placeholder="Enter Nama Paket" value="{{$paket->nama_paket}}">
           </div>
           <div class="form-group">
             <label for="harga_awal">Harga </label>
             <input type="integer" name="harga" class="form-control" id="harga_awal" placeholder="Enter Harga" value="{{$paket->harga}}">
           </div>
       <!-- /.card-body -->
       <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button> 
       </div>
     </form>
</div>
</div>
</form>
</div>
<br>
@endsection