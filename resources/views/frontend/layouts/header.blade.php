<header id="header" class="d-flex align-items-center">
  <div class="container d-flex justify-content-between align-items-center">

    <div class="logo d-flex flex-row align-items-center">
      <a href="index.html"><img src="{{ 'frontend/assets/img/Logo-Tut-Wuri-Handayani.png' }}" alt=""
          class="img-fluid me-2"></a>
      <h1><a href="/home">SISFOPUS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
    </div>

    <nav id="navbar" class="navbar ">
      <ul>
        <li><a class="{{ Request::is('home*') ? 'active' : '' }}" href="/home">Beranda</a></li>
        <li><a class="{{ Request::is('katalog*') ? 'active' : '' }}" href="/katalog">Katalog</a></li>
        <li><a class="{{ Request::is('tentang*') ? 'active' : '' }}" href="/tentang">Tentang</a></li>
        <li><a class="{{ Request::is('bantuan*') ? 'active' : '' }}" href="/bantuan">Bantuan</a></li>

      </ul>
    </nav><!-- .navbar -->
    <a href="/login" type="button" class="btn btn-outline-warning ms-2">Masuk</a>

  </div>
</header>