<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>LA Cargo - @yield('title')</title>

  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/lightslider.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/js/script.js') }}" defer></script>
  <script src="{{ asset('/js/jQuery.js') }}"></script>
  <script src="{{ asset('/js/lightslider.js') }}"></script>
</head>

<body>
  <div class="navbar-desktop">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand LA-Brand" href="{{ url('/') }}">LA Cargo</a>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> --}}
        <div class="navbar-nav">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
            href="{{ url('/') }}">Home</a>
          <a class="nav-link {{ Request::is('shipping-rate') ? 'active' : '' }}"
            href="{{ url('shipping-rate') }}">Shipping Rate</a>
          <a class="nav-link {{ Request::is('tracking') ? 'active' : '' }}" href="#">Tracking</a>
          <a class="nav-link {{ Request::is('services') ? 'active' : '' }}" href="{{ url('services') }}">Services</a>
          <a class="nav-link {{ Request::is('information') ? 'active' : '' }}"
            href="{{ url('information') }}">Information</a>
          <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('about') }}">About</a>
        </div>
        <div class="navbar-nav ms-auto">
          <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ url('login') }}"><button
              type="button" class="btn btn-danger">Getting Started</button></a>
        </div>
      </div>
    </nav>
  </div>
  <div class="navbar-mobile">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <div id="myNav" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="overlay-content">
            <a class="{{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
            <a class="{{ Request::is('shipping-rate') ? 'active' : '' }}" href="{{ url('shipping-rate') }}">Shipping
              Rate</a>
            <a class="{{ Request::is('order') ? 'active' : '' }}" href="#">Tracking</a>
            <a class="{{ Request::is('services') ? 'active' : '' }}" href="{{ url('services') }}">Services</a>
            <a class="{{ Request::is('information') ? 'active' : '' }}"
              href="{{ url('information') }}">Information</a>
            <a class="{{ Request::is('about') ? 'active' : '' }}" href="{{ url('about') }}">About</a>
            <a class="{{ Request::is('login') ? 'active' : '' }}" href="{{ url('login') }}"><button type="button"
                class="btn btn-danger">Getting Started</button></a>
          </div>
        </div>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <div class="navbar-nav LA-Brand ms-auto" href="{{ url('/') }}">LA Cargo</div>
      </div>
    </nav>
  </div>
  {{-- <nav class="navbar navbar-light navbar-expand-lg bg-light fixed-top">
    <a class="navbar-brand LA-Brand" href="{{ url('/') }}">LA Cargo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg"
      aria-controls="navbarOffcanvasLg">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title LA-Brand" id="offcanvasNavbarLabel">LA Cargo</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
            href="{{ url('/') }}">Home</li>
          <li class="nav-link {{ Request::is('order') ? 'active' : '' }}" href="#">Tracking</li>
          <li class="nav-link {{ Request::is('services') ? 'active' : '' }}" href="{{ url('services') }}">Services</li>
          <li class="nav-link {{ Request::is('information') ? 'active' : '' }}"
            href="{{ url('information') }}">Information</li>
          <li class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('about') }}">About</li>
          <li class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ url('login') }}"><button
              type="button" class="btn btn-danger">Getting Started</button></li>
        </ul>
      </div>
    </div>
    </div>
  </nav> --}}

  <div class="content">
    @yield('content')
  </div>

  <div class="footer" id="footer">
    <footer class="align-item-center py-4">
      <div class="container">
        <h3><b>Partnership</b></h3>
        <div class="sponsor-grid-container">
          <div class="sponsor-grid">
            <p><a href="https://www.scania.com/"><img class="partner" src="{{ asset('img/scania_logo_black.svg') }}"
                  alt="Scania.png"></a><br></p>
          </div>
          <div class="sponsor-grid">
            <p><a href="https://www.unitedtractors.com/"><img class="partner"
                  src="{{ asset('img/ut_logo_black.svg') }}" alt="Scania.png"></a><br></p>
          </div>
          <div class="sponsor-grid">
            <p><a href="https://www.mercedes-benz.com/"><img class="partner"
                  src="{{ asset('img/mercedes_logo_black.svg') }}" alt="Mercedes-Benz Logo 2010.svg"></a><br></p>
          </div>
          <div class="sponsor-grid">
            <p><a href="https://store.steampowered.com/"><img class="partner"
                  src="{{ asset('img/steam_logo_black.svg') }}" alt="Steam icon logo.svg"></a><br>
          </div>
          <div class="sponsor-grid">
            <p><a href="https://www.volvo.com/"><img class="partner" src="{{ asset('img/volvo_logo_black.svg') }}"
                  alt="Mercedes-Benz Logo 2010.svg"></a><br></p>
          </div>
          <div class="sponsor-grid">
            <p><a href="https://scsoft.com/"><img class="partner" src="{{ asset('img/scs_logo_black.svg') }}"
                  alt="Steam icon logo.svg"></a><br>
          </div>
        </div>
        <div class="row py-5">
          <div class="col-md">
            <h3><b>Contact</b></h3>
            <p><i class="bi bi-geo-alt"> </i><b>Jl. Pesantren 2B, Banaran, Kec. Pesantren, Kota Kediri, 64133.</b></p>
            <p><i class="bi bi-telephone"> </i>Phone : (+62)813-3579-3208</p>
            <p><i class="bi bi-whatsapp"> </i>Whatsapp : (+62)813-3579-3208</p>
            <p><i class="bi bi-envelope"> </i>Email: abisata.group@gmail.com</p>
          </div>
          <div class="col-md">
            <h3 class="LA-Brand">LA Cargo</h3>
            <p><b>Follow us on: </b>
              <a href="https://www.instagram.com/abisatya.group" class="footer-medsos"><i class="bi bi-instagram">
                </i>abisatya.group</a>
            </p>
          </div>
          <div class="col-md">
            <h3><b>Headquarters</b></h3>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.585967095992!2d112.0429746!3d-7.833568099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78578108df30e3%3A0x112402bd223022cc!2sJl.%20Pesantren%202B%2C%20Banaran%2C%20Kec.%20Pesantren%2C%20Kabupaten%20Kediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1659887276588!5m2!1sid!2sid"
              width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <p class="text-center"></p>
    </footer>
  </div>
</body>

</html>
