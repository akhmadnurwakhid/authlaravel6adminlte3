  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Cari" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <span class="d-none d-md-inline mr-2">Hai, {{ Auth::user()->username }}</span>
          @if (Auth::user()->foto == url('storage'))
          <img src="{{asset('assets/dist/img/user.svg') }}" class="user-image img-circle elevation-2" alt="User Image">
          @else
          <img src="{{url(Auth::user()->foto)}}" class="user-image img-circle elevation-2" alt="User Image">
          @endif
        </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="{{route('profile')}}" class="dropdown-item">
              <i class="fas fa-user mr-2"></i> profile
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{route('edit-password')}}" class="dropdown-item">
              <i class="fas fa-lock mr-2"></i> Ubah Password
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt mr-2"></i> Keluar
              </a>

          </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
