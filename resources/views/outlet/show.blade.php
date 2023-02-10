@extends('master')

@section('content')
<form action="/outlet" method="post">
    @csrf
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
        <input type="text" name="nama" value="{{$outlet->nama}}" disabled>
        </div>
        </div>
        <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
        <input type="text" name="alamat" value="{{$outlet->alamat}}" disabled>
        </div>
        </div>
        <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Telpon</label>
        <div class="col-sm-10">
        <input type="text" name="tlp" value="{{$outlet->tlp}}" disabled>
        </div>
        </div>
        <button href="/outlet" value="submit">back!!</button>
  </form>
@endsection