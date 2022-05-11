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
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}" defer></script>
    <script src="{{ asset('/js/jQuery.js') }}"></script>
    <script src="{{ asset('/js/lightslider.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand LA-Brand" href="{{ url('/') }}">LA Cargo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
              <a class="nav-link {{ Request::is('order') ? 'active' : '' }}" href="#">Tracking</a>
              <a class="nav-link {{ Request::is('services') ? 'active' : '' }}" href="{{ url('services') }}">Services</a>
              <a class="nav-link {{ Request::is('information') ? 'active' : '' }}" href="{{ url('information') }}">Information</a>
              <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('about') }}">About</a>
            </div>
            <div class="navbar-nav ms-auto">
              <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ url('login') }}"><button type="button" class="btn btn-danger">Getting Started</button></a>
            </div>
          </div>
        </div>
      </nav>

      <div class="content">
          @yield('content')
      </div>

      <div class="footer" id="footer">
        <footer class="align-item-center py-4">
          <div class="container">
            <h3><b>Partnership</b></h3>
            <div class="row py-5">
              <div class="col-md">
                <p ><a href="https://www.scania.com/"><img class="partner-scania" src="https://upload.wikimedia.org/wikipedia/id/3/37/Scania.png" alt="Scania.png"></a><br></p>
              </div>
              <div class="col-md">
                <p><a href="https://www.unitedtractors.com/"><img class="partner-ut" src="https://www.unitedtractors.com/wp-content/uploads/2019/07/Logo_UT-55px.png" alt="Scania.png"></a><br></p>
              </div>
              <div class="col-md">
                <p><a href="https://www.mercedes-benz.com/"><img class="partner-merc" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Mercedes-Benz_Logo_2010.svg/1200px-Mercedes-Benz_Logo_2010.svg.png" alt="Mercedes-Benz Logo 2010.svg"></a><br></p>
              </div>
              <div class="col-md">
                <p><a href="https://store.steampowered.com/"><img class="partner-steam" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Steam_icon_logo.svg/1200px-Steam_icon_logo.svg.png" alt="Steam icon logo.svg"></a><br></div>
            </div>
            <div class="row py-5">
              <div class="col-md">
                <h3><b>Contact</b></h3>
                <p><i class="bi bi-geo-alt"> </i><b>Ngadiluwih, Kota Kediri, Jawa Timur, 16122.</b></p>
                <p><i class="bi bi-telephone"> </i>Phone : (+62)251-839-6790</p>
                <p><i class="bi bi-whatsapp"> </i>Whatsapp : (+62)811-9711-5927</p>
                <p><i class="bi bi-envelope"> </i>Email: abisata.group@gmail.com</p>
              </div>
              <div class="col-md">
                <h3 class="LA-Brand">LA Cargo</h3>
                <p><b>Follow us on: </b>
                  <a href="https://www.instagram.com" class="footer-medsos"><i class="bi bi-instagram"> </i>abisatya_group</a>
                </p>
              </div>
              <div class="col-md">
                <h3><b>Lokasi</b></h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63231.6948928054!2d111.96217892848873!3d-7.897060593951992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78f8f678116c63%3A0x4027a76e35311a0!2sKec.%20Ngadiluwih%2C%20Kabupaten%20Kediri%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1652165890743!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <p class="text-center"></p>
        </footer>
      </div>
</body>
</html>