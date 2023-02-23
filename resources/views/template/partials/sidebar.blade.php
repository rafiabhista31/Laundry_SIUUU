<div id="wrapper">
  <!-- Sidebar -->
  <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="{{asset('rafi/img/logo/logo2.png')}}">
      </div>
      <div class="sidebar-brand-text mx-3">Laundry Siuuu</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>
    @if (auth()->user()->role == 'admin')
    <li class="nav-item">
      <a class="nav-link" href="/outlet">
        <i class="fa fa-table" aria-hidden="true"></i>
        <span>Outlet</span>
      </a>
    </li>
    @endif
    @if (auth()->user()->role == 'admin')
    <li class="nav-item">
      <a class="nav-link" href="/paket">
        <i class="fa fa-table" aria-hidden="true"></i>
        <span>Paket</span>
      </a>
    </li>
    @endif
    @if (auth()->user()->role == 'admin')
    <li class="nav-item">
      <a class="nav-link" href="/member">
        <i class="fa fa-table" aria-hidden="true"></i>
        <span>Member</span>
      </a>
    </li>
    @endif
    <li class="nav-item">
      <a class="nav-link" href="/transaksi">
        <i class="fa fa-table" aria-hidden="true"></i>
        <span>Transaksi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/logout">
        <i class="fa-solid fa-door-closed fa-lg"></i>
        <span>Logout</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
  </ul>