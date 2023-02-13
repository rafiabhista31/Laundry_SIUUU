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
          @foreach ($outlet as $item)
          <option value="{{ $item->id}}">{{ $item->nama }}</option>
          @endforeach
        </select>
             <div class="form-group">
               <label for="Kode_Invoice">Kode Invoice</label>
               <input type="text" name="kode_invoice" class="form-control" id="Kode_Invoice" placeholder="Kode Invoide">
             </div>
             <div class="form-group">
              <label>Member Id</label>
             <select class="form-select" aria-label="Default select example" name="member_id" >
              <option selected>Open this select menu</option>
              @foreach ($member as $item)
              <option value="{{ $item->id}}">{{ $item->nama }}</option>
              @endforeach
             </select>
             </div>
              <div class="form-group">
                <label for="harga_awal">Tanggal</label>
                <input type="date" name="tgl" class="form-control" id="Tanggal" placeholder="Tanggal">
              </div>
              <div class="form-group">
                <label for="harga_awal">Tanggal Bayar</label>
                <input type="date" name="tgl_bayar" class="form-control" id="Tgl_Bayar" placeholder="Tanggal Bayar">
              </div>
              <div class="form-group">
                <label for="harga_awal">Batas Waktu</label>
                <input type="date" name="batas_waktu" class="form-control" id="Batas_Waktu" placeholder="Tanggal Bayar">
              </div>
              <div class="form-group">
                <label for="harga_awal">Biaya Tambahan</label>
                <input type="number" name="biaya_tambahan" class="form-control" id="Biaya_Tambahan" placeholder="Biaya Tambahan">
              </div>
              <div class="form-group">
                <label for="harga_awal">Diskon</label>
                <input type="number" name="diskon" class="form-control" id="Diskon" placeholder="Diskon">
              </div>
              <div class="form-group">
                <label for="harga_awal">Pajak</label>
                <input type="number" name="pajak" class="form-control" id="Pajak" placeholder="Pajak">
              </div>
            </select>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="status">
                <option disabled selected>-- Pilih Salah Satu --</option>
                <option value="baru">Baru</option>
                <option value="proses">Proses</option>
                <option value="selesai">Selesai</option>
                <option value="diambil">Di ambil</option>
              </select>
            </div>
            <div class="form-group">
              <label>Dibayar</label>
              <select class="form-control" name="dibayar">
                <option disabled selected>-- Pilih Salah Satu --</option>
                <option value="dibayar">Dibayar</option>
                <option value="belum_dibayar">Belum Dibayar</option>
              </select>
            </div>
            <div class="form-group">
              <label>User Id</label>
              <select class="form-select" aria-label="Default select example" name="user_id" >
               <option selected>Open this select menu</option>
               @foreach ($user as $item)
               <option value="{{ $item->id}}">{{ $item->id }}</option>
               @endforeach
              </select>
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