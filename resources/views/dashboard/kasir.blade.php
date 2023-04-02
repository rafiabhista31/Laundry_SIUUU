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
        Anda berada di dashboard kasir
      </strong>
      <form action="{{ route('transaksi.baru') }}" method="POST">
        @csrf
        <select class="select2-single form-control" name="member_id" >
          <option selected="selected" disabled>-- Pilih Member --</option>
          @foreach ($members as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
          @endforeach
        </select>
        <br>
        <input type="submit" value="Transaksi baru" class="btn btn-success btn-lg">
      </form>
      </div>
      <!-- /.card-body -->
      <div class="card-footer"><strong>
      Footer
    </strong>
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
  </div>

  </section>
@endsection

<!--Select 2-->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>