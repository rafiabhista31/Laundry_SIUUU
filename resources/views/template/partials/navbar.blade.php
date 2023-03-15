<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
    <!-- TopBar -->
    <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
      <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img class="img-profile rounded-circle" src="{{asset('rafi/img/boy.png')}}" style="max-width: 60px">
            <span class="ml-2 d-none d-lg-inline text-white small">
              @if (auth()->user()->role === 'admin')
              <div class="info">
                ADMIN
              </div>
              @endif
             @if (auth()->user()->role === 'kasir')
              <div class="info">
                KASIR
              </div>
            @endif
            @if (auth()->user()->role === 'owner')
              <div class="info">
                OWNER
              </div>
            @endif
            </span>
          </a>
        </li>
      </ul>
    </nav>