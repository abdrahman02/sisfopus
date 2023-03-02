@extends('frontend.layouts.main')

<body>

  <!-- ======= Header ======= -->
  @include('frontend.layouts.header')
<!-- End Header -->

<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(frontend/assets/img/slide/slide1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <br> <span>SISFOPUS</span></h2>
                <p class="animate__animated animate__fadeInUp">SISFOPUS merupakan Sistem Informasi Perpustakaan berbasis website pada sekolahh dan merupakan aplikasi yang dibuat untuk memudahkan proses pendataan, peminjamnan dan pengembalian buku pada perpustakaan.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Selengkapnya</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(frontend/assets/img/slide/slide2.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">Selamat Datang di <br> <span>SISFOPUS</h2>
                <p class="animate__animated animate__fadeInUp">SISFOPUS merupakan Sistem Informasi Perpustakaan berbasis website pada sekolahh dan merupakan aplikasi yang dibuat untuk memudahkan proses pendataan, peminjamnan dan pengembalian buku pada perpustakaan.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    {{-- <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h3><a href="">Lorem Ipsum</a></h3>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h3><a href="">Dolor Sitema</a></h3>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h3><a href="">Sed ut perspiciatis</a></h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section --> --}}

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Tentang Kami.</h3>
            <p class="fst-italic">
                SISFOPUS merupakan Sistem Informasi Perpustakaan berbasis website pada sekolahh dan merupakan aplikasi yang dibuat untuk memudahkan proses pendataan, peminjamnan dan pengembalian buku pada perpustakaan.
            </p>
            <h5>Berikut Fitur yang ada pada sistem ini :</h5>
            <ul>
              <li><i class="bi bi-check-circle"></i> Manajemen dan Pendataan Buku.</li>
              <li><i class="bi bi-check-circle"></i> Peminjaman dan Pengembalian Buku.</li>
              <li><i class="bi bi-check-circle"></i> Manajemen Anggota.</li>
            </ul>
            <a href="/tentang" type="button" class="btn btn-warning"
            style="--bs-btn-padding-y: .35rem; --bs-btn-padding-x: .7rem; --bs-btn-font-size: .85rem;"> Selengkapnya </a>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
<!-- End Services Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend.layouts.footer')
