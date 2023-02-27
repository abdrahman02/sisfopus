<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-3">
        {{-- Breadcrumb --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        {{-- Avatar --}}
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 justify-content-end" id="navbar">
            <ul class="navbar-nav ">

                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="#" class="nav-link text-white p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                </li>

                <li class="nav-item dropdown ms-3 pe-2 d-flex align-items-center">
                    <a href="#dropdownMenuAvatar"
                        class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle"
                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('backend/img/avatar.png') }}"
                            class="icon icon-shape h-100 shadow-primary rounded-circle" alt="main_logo" />
                    </a>

                    <div class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" id="dropdownMenuAvatar">
                        <a class="dropdown-item border-radius-md" href="#">
                            <i class="fa-solid fa-gear fixed-plugin-button-nav cursor-pointer text-info"></i>&nbsp
                            Settings
                        </a>
                        <a class="dropdown-item border-radius-md" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i
                                class="fa-solid fa-right-from-bracket fixed-plugin-button-nav cursor-pointer text-danger"></i>&nbsp
                            Sign out
                            <form action="#" method="post" id="logout-form" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>