@extends('master')

@section('content')
    
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
@section('scripts')
<script>
// resources/js/app.js

$(document).ready(function() {
    // Fungsi untuk mengambil harga dari database
    function getHarga(jenisPakaianId) {
        // ...
    }

    // Fungsi untuk menghitung total harga
    function hitungTotalHarga() {
        var harga = parseFloat($('#harga').val()) || 0;
        var berat = parseFloat($('#berat').val()) || 0;
        var totalHarga = harga * berat;

        $('#total_harga').val(totalHarga.toFixed(2));
    }

    // Menangani perubahan pada p
 </script>
@endsection