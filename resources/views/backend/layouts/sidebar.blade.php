<aside
    class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 shadow"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/home">
            <img src="{{ asset('backend/assets/img/Logo-Tut-Wuri-Handayani.png') }}" class="navbar-brand-img h-100"
                alt="main_logo" />
            <span class="ms-1 font-weight-bold">SISFOPUS</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}" href="/dashboard">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('books*') ? 'active' : '' }}" href="/books">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Buku</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('transaksi*') ? 'active' : '' }}" href="/transaksi">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Transaksi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('anggota*') ? 'active' : '' }}" href="/anggota">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Anggota</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3">
        <div class="docs-info d-flex flex-column">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Masuk sebagai :</h6>
            <span class="text-xs mx-auto mt-1 mb-2 font-weight-bold text-success">Administrator</span>
        </div>
        <a href="#" class="btn bg-gradient-danger btn-sm w-100 mt-2">SIGN OUT</a>
    </div>
</aside>