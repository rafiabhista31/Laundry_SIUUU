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
    @if (auth()->user()->role == 'admin')
    <li class="nav-item">
      <a class="nav-link" href="/dashboard/admin">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    @endif
    @if (auth()->user()->role == 'kasir')
    <li class="nav-item">
      <a class="nav-link" href="/dashboard/kasir">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    @endif
    @if (auth()->user()->role == 'owner')
    <li class="nav-item">
      <a class="nav-link" href="/dashboard/owner">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    @endif
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Features
    </div>
    @if (auth()->user()->role == 'admin')
    <li class="nav-item">
      <a class="nav-link" href="/outlet">
        <i class="fas fa-store-alt"></i>
        <span>Outlet</span>
      </a>
    </li>
    @endif
    @if (auth()->user()->role == 'admin')
    <li class="nav-item">
      <a class="nav-link" href="/paket">
        <i class="fas fa-cube"></i>
        <span>Paket</span>
      </a>
    </li>
    @endif
    @if (auth()->user()->role == 'admin')
    <li class="nav-item">
      <a class="nav-link" href="/member">
        <i class="fas far fa-user-circle"></i>
        <span>Member</span>
      </a>
    </li>
    @endif
    @if (auth()->user()->role == 'admin')
    <li class="nav-item">
      <a class="nav-link" href="/user">
        <i class="fas fad fa-users"></i>
        <span>User</span>
      </a>
    </li>
    @endif
    <li class="nav-item">
      <a class="nav-link" href="/transaksi">
        <i class="fas fad fa-money-bill-alt"></i>
        <span>Transaksi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/logout">
        <i class="fas fa-solid fa-door-closed fa-lg"></i>
        <span>Logout</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
  </ul>