@extends('user/layout')

@section('title')
  Home
@endsection

@section('content')
  <div class="home-content">
    <div class="hero">
      <img src="{{ asset('img/headline.jpg') }}" alt="">
      <div class="hero-caption">
        <h5>Your Logistic Solution</h5>
        <p>An integrated transportation company to serve the logistics needs of our customers and providing the best
          service
          to customers.</p>
        <a href="{{ url('login') }}" class="links"><button type="button" class="btn btn-danger">Getting
            Started</button></a>
      </div>
    </div>

    <div class="container">
      <div class="features text-center py-5 px-3">
        <h2>Features</h2>
        <div class="row pt-3">
          <div class="col">
            <i class="features-icon bi bi-map"></i>
            <h5>Across Java, Sumatra, Bali, Madura & Lombok</h5>
          </div>
          <div class="col">
            <i class="features-icon bi bi-headset"></i>
            <h5>24 Hours Customer Services</h5>
          </div>
          <div class="col">
            <i class="features-icon bi bi-currency-dollar"></i>
            <h5>Cheap Price Premium Services</h5>
          </div>
          <div class="col">
            <i class="features-icon bi bi-cloud-arrow-up"></i>
            <h5>Using Cloud Services</h5>
          </div>
        </div>
      </div>


      <div class="services-area py-5 px-3">
        <div class="row align-items-center flex-lg-row pb-5">
          <div class="col-sm">
            <div class="services-area-caption">
              <h3>Send your logistic to these location.</h3>
            </div>
          </div>
          <div class="col-sm">
            <div class="services-area-slider">
              <ul id="autoWidth" class="cS-hidden">
                <li class="item-a bgaa">
                  <img src="{{ asset('img/jakarta.jpeg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Jakarta</p>
                </li>
                <li class="item-a bgaa">
                  <img src="{{ asset('img/banten.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Banten</p>
                </li>
                <li class="item-a bgab">
                  <img src="{{ asset('img/jawa-barat.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Jawa Barat</p>
                </li>
                <li class="item-a bgab">
                  <img src="{{ asset('img/jawa-tengah.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Jawa Tengah</p>
                </li>
                <li class="item-a bgab">
                  <img src="{{ asset('img/jawa-timur.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Jawa Timur</p>
                </li>
                <li class="item-a bgab">
                  <img src="{{ asset('img/yogyakarta.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Yogyakarta</p>
                </li>
                <li class="item-a bgab">
                  <img src="{{ asset('img/bali.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Bali</p>
                </li>
                <li class="item-a bgab">
                  <img src="{{ asset('img/ntb.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Nusa Tenggara</p>
                </li>
              </ul>
            </div>
            <div class="services-area-slider2">
              <ul id="autoWidth2" class="cS-hidden">
                <li class="item-a bgab">
                  <img src="{{ asset('img/lampung.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Lampung</p>
                </li>
                <li class="item-a bgab">
                  <img src="{{ asset('img/sumatera-selatan.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Sumatera Selatan</p>
                </li>
                <li class="item-a bgab">
                  <img src="{{ asset('img/bengkulu.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Bengkulu</p>
                </li>
                <li class="item-a bgab">
                  <img src="{{ asset('img/jambi.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Jambi</p>
                </li>
                <li class="item-a bgab">
                  <img src="{{ asset('img/sumatera-barat.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Sumatera Barat</p>
                </li>
                <li class="item-a bgab">
                  <img src="{{ asset('img/riau.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Riau</p>
                </li>
                <li class="item-a bgab">
                  <img src="{{ asset('img/sumatera-utara.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Sumatera Utara</p>
                </li>
                <li class="item-a bgab">
                  <img src="{{ asset('img/aceh.jpg') }}" class="mx-auto d-block" alt="">
                  <p class="city-name">Aceh</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="commitment text-center py-5 px-3">
        <h2>Our Commitment</h2>
        <div class="commitment-card mt-3">
          <div class="row align-items-center flex-column-reverse flex-lg-row pb-5 flex-sm-row">
            <div class="col-sm">
              <div class="commitment-image1">
                <img src="{{ asset('img/josiah-farrow-ucuOscdCaO4-unsplash.jpg') }}" class="mx-auto d-block" alt="">
              </div>
            </div>
            <div class="col-sm">
              <div class="commitment-caption">
                <h5>Green Delivery</h5>
                <p>By the year 2050 we want to reduce all logistics-related emissions to zero – a highly ambitious goal.
                  Our
                  mission as the leading mail and logistics company is to connect people and improve lives.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="commitment-card mt-3">
          <div class="row align-items-center flex-lg-row pb-5">
            <div class="col-sm">
              <div class="commitment-caption-reverse">
                <h5>Create Job Opportunities</h5>
                <p>Provide job opportunities to the community to improve welfare. It can also improve the quality of both
                  the
                  community and our company.</p>
              </div>
            </div>
            <div class="col-sm">
              <div class="commitment-image2">
                <img src="{{ asset('img/maarten-van-den-heuvel-KSQgzzn3dW0-unsplash.jpg') }}" class="mx-auto d-block"
                  alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
