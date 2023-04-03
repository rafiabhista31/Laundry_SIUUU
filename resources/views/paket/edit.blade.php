@extends('master')

@section('content')
    
  <div class="col-md-8">
    <form action="{{route ('paket.update', [$paket->id])}}" method="POST">
      @csrf
      @method("PUT")
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Masukan Data Barang</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label>Id Outlet</label>
            <select class="form-control" aria-label="Default select example" name="outlet_id">
              @foreach ($outlet as $item)
                <option value="{{ $item->id }}" {{ $item->id == $paket->outlet_id ? 'selected' : '' }}>
                  {{ $item->nama .' | '. $item->alamat }}
                </option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Jenis</label>
            <select class="form-control" name="jenis" id="Jenis">
              <option value="kiloan" {{ $paket->jenis == 'kiloan' ? 'selected' : '' }}>Kiloan</option>
              <option value="selimut" {{ $paket->jenis == 'selimut' ? 'selected' : '' }}>Selimut</option>
              <option value="bed_cover" {{ $paket->jenis == 'bed_cover' ? 'selected' : '' }}>Bed Cover</option>
              <option value="kaos" {{ $paket->jenis == 'kaos' ? 'selected' : '' }}>Kaos</option>
              <option value="lain" {{ $paket->jenis == 'lain' ? 'selected' : '' }}>Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label for="nama_paket">Nama Paket</label>
            <input type="text" name="nama_paket" class="form-control" id="nama_paket" placeholder="Enter Nama Paket" value="{{ $paket->nama_paket }}">
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="integer" name="harga" class="form-control" id="harga" placeholder="Enter Harga" value="{{ $paket->harga }}">
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
<br>
@endsection