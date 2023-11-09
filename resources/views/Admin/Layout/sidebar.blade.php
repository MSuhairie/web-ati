<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="./">
            <img src="{{ asset('assets') }}/foto/logo_atip.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Politeknik Ati Padang</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main" style="height: 100%;">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Menu</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home_admin') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2  text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dahsboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('/laporan') ? 'active' : '' }}" href="{{ route('laporan') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Laporan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('/laporanperbulan') ? 'active' : '' }}" href="{{ route('laporanperbulan') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Laporan Perbulan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('/laporanpertahun') ? 'active' : '' }}" href="{{ route('laporanpertahun') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Laporan Pertahun</span>
                </a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="return confirm('Anda Yakin Ingin Logout ?');">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-button-power text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
            </li> --}}

        </ul>
    </div>

</aside>

