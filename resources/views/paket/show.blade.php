@extends('master')

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/paket" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nomer Induk Siswa</label>
                    <input type="text" name="outlet_id" class="form-control" id="inputNIS" placeholder="Enter Nomer Induk Siswa"value="{{ $paket->outlet_id }}" disabled > 
                  </div>
                  <div class="form-group">
                  <label>Jenis</label>
                <select class="form-control" name="jenis">
                  <option value="L" disabled {{ $paket->jenis == "kiloan" ? "selected" : "" }}>Kiloan</option>
                  <option value="P" disabled {{ $paket->jenis == "selimut" ? "selected" : "" }}>Selimut</option>
                  <option value="L" disabled {{ $paket->jenis == "bed_cover" ? "selected" : "" }}>bed_cover</option>
                  <option value="L" disabled {{ $paket->jenis == "kaos" ? "selected" : "" }}>kaos</option>
                </select>
                </select>
              </div>
                </div>
                  <div class="form-group">
                    <label for="inputNama">Nama Siswa</label>
                    <input type="text" name="nama_paket" class="form-control" id="inputNama" placeholder="Enter Nama Siswa"value="{{ $paket->nama_paket }}" disabled >
                  </div>
                  <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="harga" class="form-control" rows="3" placeholder="Alamat Siswa"value="{{ $paket->harga }}" disabled >
                      </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button> 
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection