@extends('master')

@section('content')
<form>
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
                    <label class="label" for="inputNIS">Nomer Induk Siswa</label>
                    <input type="text" name="nis" class="form-control" id="inputNIS" placeholder="Enter Nomer Induk Siswa"value="{{ $outlet->nama }}" disabled > 
                  </div>
                  <div class="form-group">
                    <label class="label" for="inputNama">Nama Siswa</label>
                    <input type="text" name="nama_paket" class="form-control" id="inputNama" placeholder="Enter Nama Siswa"value="{{ $outlet->alamat }}" disabled >
                  </div>
                  <div class="form-group">
                        <label class="label">Alamat</label>
                        <input type="text" name="harga" class="form-control" rows="3" placeholder="Alamat Siswa"value="{{ $outlet->tlp }}" disabled >
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