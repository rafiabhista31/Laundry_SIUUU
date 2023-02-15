<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('spica/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('spica/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('spica/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('spica/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('spica/images/logo.svg')}}" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form action="{{ route('register.store')}}" method="post">
                @csrf
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control p_input">
                </div>
                <div class="form-group">
                <label>Outlet</label>
                <select class="form-select" aria-label="Default select example" name="outlet_id" >
                  <option selected>Open this select menu</option>
                  @foreach ($outlets as $item)
                  <option value="{{ $item->id}}">{{ $item->id }}</option>
                  @endforeach
                </select>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                <p class="sign-up text-center">Already have an Account?<a href="{{route('login')}}"> Sign Up</a></p>
                <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{asset('spica/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('spica/js/off-canvas.js')}}"></script>
  <script src="{{asset('spica/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('spica/js/template.js')}}"></script>
  <!-- endinject -->
</body>

</html>
