@extends('master')

@section('content')
<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Masukan data Outlet</h3>
    </div>
    <form action="/outlet" method="post">
      @csrf
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" name="nama" value="{{$outlet->nama}}">
                        </div>
                </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                          <div class="col-sm-10">
                            <input type="text" name="alamat" value="{{$outlet->alamat}}">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Telpon</label>
                              <div class="col-sm-10">
                                <input type="text" name="tlp" value="{{$outlet->tlp}}">
                              </div>
                      </div>
                      <button type="submit" class="btn btn-primary ml-3">Update</button>
  <a href="/outlet" class="btn btn-secondary ml-3" style="float:left;">Back</a> 
                    </form>
                  </div>
                </div>
@endsection