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
          <input type="text" name="nama">
                        </div>
                </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                          <div class="col-sm-10">
                            <input type="text" name="alamat">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Telpon</label>
                              <div class="col-sm-10">
                                <input type="text" name="tlp">
                              </div>
                      </div>
                      <button type="submit">HANTEM!!</button>
                    </form>
                  </div>
                </div>
@endsection