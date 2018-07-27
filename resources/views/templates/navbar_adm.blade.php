    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" style="color: #F8F5F0" href="{{route('beranda')}}">LAB SISTEM INFORMASI</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('beranda')}}"><i class="fa fa-home"></i> Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('info')}}"><i class="fa fa-bullhorn"></i> Informasi</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownPraktikum" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-code"></i> Praktikum
                </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="{{route('jadwal')}}">Jadwal Praktikum</a>
                <a class="dropdown-item" href="{{route('peraturan')}}">Peraturan</a>
                <a class="dropdown-item" href="portfolio-3-col.html">Materi Praktikum</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('laboratorium')}}"><i class="fa fa-building"></i>  Laboratorium</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin_dashboard')}}"><i class="fa fa-tachometer-alt"></i>  Admin Panel</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPraktikum" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-id-badge"></i> {{Auth::user()->name}}
                </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="{{route('asisten_dashboard')}}">Dashboard</a>
                <a class="dropdown-item" href="{{route('asisten_profile')}}">Profil</a>
                <a class="dropdown-item" href="{{route('asisten_catatan')}}">Catatan Bertugas</a>

                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
