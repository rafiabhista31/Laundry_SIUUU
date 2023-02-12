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
              <form action="/member" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label class="label" for="inputNIS">Nomer Induk Siswa</label>
                    <input type="text" name="nama" class="form-control" id="inputNIS" 
                    placeholder="Enter Nomer Induk Siswa"value="{{ $member->nama }}" disabled > 
                  </div>
                  <div class="form-group">
                    <label class="label" for="inputNama">Nama Siswa</label>
                    <input type="text" name="alamat" class="form-control" id="inputNama" 
                    placeholder="Enter Nama Siswa"value="{{ $member->alamat }}" disabled >
                  </div>
                  <div class="form-group">
                     <label class="label">Alamat</label>
                     <input type="text" name="tlp" class="form-control" rows="3"
                     placeholder="Alamat Siswa"value="{{ $member->tlp }}" disabled >
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                      <option disabled selected>-- Pilih Salah Satu --</option>
                      <option value="L" disabled {{ $member->jenis_kelamin == "L" ? "selected" : "" }}>Laki-laki</option>
                      <option value="P" disabled {{ $member->jenis_kelamin == "L" ? "selected" : "" }}>Perempuan</option>
                    </select>
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