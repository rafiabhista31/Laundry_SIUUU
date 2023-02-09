@extends('master')

@section('content')
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
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection