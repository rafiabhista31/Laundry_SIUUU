<nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
  <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" id="profileDropdown">
          <img src="{{asset('spica/images/faces/face5.jpg')}}" alt="profile"/>
          <span class="nav-profile-name">Eleanor Richardson</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="mdi mdi-settings text-primary"></i>
            Settings
          </a>
          <a class="dropdown-item">
            <i class="mdi mdi-logout text-primary" href="logout" ></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
  </div>
</nav>