<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backend/assets/img/Logo-Tut-Wuri-Handayani.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('backend/assets/img/Logo-Tut-Wuri-Handayani.png') }}">
    <title>
        SISFOPUS
    </title>
    <!-- Nucleo Icons -->
    <link href="{{ asset('backend/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="{{ asset('backend/icons/kitfontawesome.js') }}"></script>
    <link href="{{ asset('backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('backend/assets/css/argon-dashboard.css') }}" rel="stylesheet" />
</head>

<body>
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto text-center">
                            <h4 class="font-weight-bolder">
                                LOGIN
                            </h4>
                            <p class="mb-0">
                                Sistem Informasi Perpustakaan Sekolah
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card shadow-xl">
                                <div class="card-header pb-0 text-start mx-auto">
                                    <img src="backend/assets/img/Logo-Tut-Wuri-Handayani.png" alt="logo"
                                        style="height: 100px;">
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <input type="text" class="form-control form-control-lg" name="nisn-username"
                                                placeholder="NISN/Username" required autofocus />
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control form-control-lg" name="password"
                                                placeholder="Password" aria-label="Password" required />
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
                                                Login
                                            </button>
                                            <a href="/home"
                                                class="btn btn-lg btn-outline-warning btn-lg w-100 mt-4 mb-0 fw-light">
                                                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp
                                                Back to home
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="
                                    background-image: url('auth/img/login-photo.jpg');
                                    background-size: cover;
                                ">
                                <span class="mask bg-gradient-secondary opacity-6"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <script src="{{ asset('backend/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/chartjs.min.js') }}"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
  var options = {
    damping: '0.5'
  }
  Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
    </script>

    <!-- Github buttons -->
    <script src="{{ asset('backend/assets/js/buttons.js') }}"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('backend/assets/js/argon-dashboard.min.js') }}"></script>
</body>

</html>