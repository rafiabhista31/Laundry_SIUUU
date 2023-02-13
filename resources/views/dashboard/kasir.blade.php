@extends('master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<section class="content">

    <!-- Default box -->
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
        Anda berada di dashboard kasir
      </strong>
      </div>
      <!-- /.card-body -->
      <div class="card-footer"><strong>
      Footer
    </strong>
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>

@endsection