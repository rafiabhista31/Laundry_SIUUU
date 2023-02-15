@extends('master')

@section('content')
    
<form action="{{route ('paket.update', [$paket->id])}}" method="POST">
  @csrf
  @method("PUT")
<div class="card">
    <h5 class="card-header">Table Basic</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <table>
            <div class="col-sm-10">
              <label for="inputTelepon" class="col-sm-2 col-form-label">NO Telepon</label>
                <select name="jenis" id="Jenis" value="{{$paket->jenis}}">
                  <option selected>Open this select menu</option>
                  <option value="kiloan">Kiloan</option>
                  <option value="selimut">Selimut</option>
                  <option value="bed_cover">Bed Cover</option>
                  <option value="kaos">Kaos</option>
                   <option value="jenis">Jenis</option>
            </select>
            </div>
            <div class="row mb-3">
              <label for="inputTelepon" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_paket" value="{{$paket->nama_paket}}">
               </div>
            </div>
            <div class="row mb-3">
              <label for="inputAlamat" class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10">
                  <input type="text" name="harga" value="{{$paket->harga}}">
              </div>
            </div>
          </table>
            <button type="submit">Update</button>
            <button type="back">kcaB</button>
            </form>
  
@endsection