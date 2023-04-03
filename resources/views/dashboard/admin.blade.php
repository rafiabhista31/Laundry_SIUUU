@extends('master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<section class="content">

    <!-- Default box -->
    <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Judul</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body"><strong>
        Anda berada di dashboard admin
        <br>
          <div class="col-xl-6 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Penghasilan (Perbulan)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. {{ number_format($total, 0, ',', '.') }}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                        <span>Bulan Maret</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <br>
          <div class="col-xl-6 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Transaksi (Perbulan)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $countTransaksi }}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                        <span>Bulan Maret</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </strong>
      </div>
      <!-- /.card-body -->
      <div class="card-footer"><strong>
      Footer
    </strong>
      </div>
      <!-- /.card-footer-->
    </div>
  </div>
  <br>
    <!-- /.card -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
  </section>

@endsection