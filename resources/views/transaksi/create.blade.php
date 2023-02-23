@extends('master')

@section('content')
<div class="col-lg-12">
  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Data Member</h6>
    </div>
    <div class="card-body">
      <form action="/transaksi" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Detail Outlet</label>
            <select class="form-control" aria-label="Default select example" name="outlet_id">
              <option selected disabled>Pilih Outlet</option>
                @forelse ($outlets as $outlet)
              <option value="{{ $outlet->id }}">{{$outlet->nama}}</option>
                @empty
              <option value="" disabled>Tidak ada outlet</option>
              @endforelse
        </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Detail Member</label>
            <select class="form-control" aria-label="Default select example" name="member_id" >
              <option selected disabled>Pilih Member</option>
                @forelse ($members as $member)
              <option value="{{ $member->id }}">{{$member->nama}}</option>
                @empty
              <option value="" disabled>Tidak ada member</option>
              @endforelse
        </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Detail User</label>
            <select class="form-control" aria-label="Default select example" name="user_id" >
              <option selected disabled>Pilih User</option>
                @forelse ($users as $user)
              <option value="{{ $user->id }}">{{$user->nama}}</option>
                @empty
              <option value="" disabled>Tidak ada User</option>
              @endforelse
        </select>
        </div>
    </div>
  </div>
</div>
<div class="col-lg-12">
  <div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Data Paket</h6>
    </div>
    <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Detail Paket</label>
            <select class="form-control" aria-label="Default select example" name="id_paket" >
              <option selected disabled>Pilih Paket</option>
                @forelse ($pakets as $paket)
              <option value="{{ $paket->id }}">{{$paket->nama_paket}}</option>
                @empty
              <option value="" disabled>Tidak ada member</option>
              @endforelse
            </select>
          </div>
          <div class="form-group">
            <label for="kode_invoice">Kode Invoice</label>
              <input type="number" class="form-control" name="kode_invoice" placeholder="Kode Invoice">
          </div>
          <div class="form-group">
            <label for="kode_invoice">Tanggal Input</label>
              <input type="Date" class="form-control" name="tgl" placeholder="Tanggal">
          </div>
          <div class="form-group">
            <label for="batas_waktu">Batas Waktu Ambil</label>
              <input type="Date" class="form-control" name="batas_waktu" placeholder="Batas Waktu">
          </div>
          <div class="form-group">
            <label for="tgl_bayar">Tanggal Bayar</label>
              <input type="Date" class="form-control" name="tgl_bayar" placeholder="Tanggal Bayar">
          </div>
          <div class="form-group">
            <label for="biaya_tambahan">Biaya Tambahan</label>
              <input type="number" class="form-control" name="biaya_tambahan" placeholder="Biaya Tambahan">
          </div>
          <div class="form-group">
            <label for="diskon">Diskon</label>
              <input type="double" class="form-control" name="diskon" placeholder="Diskon">
          </div>
          <div class="form-group">
            <label for="pajak">Pajak</label>
              <input type="number" class="form-control" name="pajak" placeholder="Pajak">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Status Laundry</label>
              <select class="form-control" aria-label="Default select example" name="status" >
                <option selected disabled>Status</option>
                <option value="baru">Baru</option>
                <option value="proses">Proses</option>
                <option value="selesai">Selesai</option>
                <option value="diambil">Di Ambil</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Detail Pembayaran</label>
                <select class="form-control" aria-label="Default select example" name="dibayar" >
                  <option selected disabled>Status Pembayaran</option>
                  <option value="dibayar">Dibayar</option>
                  <option value="belum_dibayar">Belum Dibayar</option>
                </select>
              </div>
              <button type="submit" class="btn btn-warning">Sambit</button>
    </div>
  </div>
</div>
</form>
@endsection