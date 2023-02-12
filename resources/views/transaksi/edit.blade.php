@extends('master')

@section('content')
    
<form action="{{route ('member.update', [$member->id])}}" method="POST">
    @csrf
    @method("PUT")
  <div class="row mb-3">
  <label for="inputTelepon" class="col-sm-2 col-form-label">NO Telepon</label>
  <div class="col-sm-10">
  <input type="text" name="nama" value="{{$member->nama}}">
  </div>
  </div>
  <div class="row mb-3">
  <label for="inputTelepon" class="col-sm-2 col-form-label">Alamat</label>
  <div class="col-sm-10">
  <input type="text" name="alamat" value="{{$member->alamat}}">
  </div>
  </div>
  <div class="row mb-3">
  <label for="inputAlamat" class="col-sm-2 col-form-label">No Telepon</label>
  <div class="col-sm-10">
  <input type="text" name="tlp" value="{{$member->tlp}}">
  </div>
  </div>
  <button type="submit">Update</button>
  <button type="back">kcaB</button>
  </form>
  
@endsection