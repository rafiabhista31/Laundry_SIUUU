<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('rafi/img/logo/logo.png')}}" rel="icon">
  <title>RuangAdmin - Blank Page</title>
  <link href="{{asset('rafi/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('rafi/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('rafi/css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  @include('template.partials.sidebar')
    <!-- Sidebar -->
    @include('template.partials.navbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
        @include('template.partials.content')
      <!-- Footer -->
      </div>
      @include('template.partials.footer')

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{asset('rafi/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('rafi/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('rafi/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('rafi/js/ruang-admin.min.js')}}"></script>
  
  @section('scripts')
<script>
    // Tambahkan kode JavaScript Anda di sini
</script>
@endsection
</body>

</html>