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

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    {{-- Sidebar --}}
    @include('backend.layouts.sidebar')
    {{-- End sidebar --}}
    <main class="main-content position-relative border-radius-lg ">
        <!-- Header -->
        @include('backend.layouts.header')
        <!-- End header -->
        <div class="container-fluid py-4">
            {{-- Content --}}
            @yield('content')
            {{-- End content --}}
            {{-- Footer --}}
            @include('backend.layouts.footer')
            {{-- End footer --}}
        </div>
    </main>
    <div class="fixed-plugin">
        {{-- Button roda gigi --}}
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        {{-- End button roda gigi --}}
        {{-- Settings panel --}}
        @include('backend.layouts.settings-panel')
    </div>
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