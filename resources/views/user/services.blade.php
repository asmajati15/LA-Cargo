@extends('user/layout')

@section('title')
  Home
@endsection

@section('content')
  <div class="services-content">
    <div class="hero">
      <img src="{{ asset('img/services.jpg') }}" alt="">
      <div class="hero-caption">
        <h5>Services</h5>
        <p>Berbagai pilihan pelayanan dalam pengiriman paket</p>
      </div>
    </div>

    <div class="services">
      <div class="services-card">
        <div class="services-img">
          <img src="{{ asset('img/regular.jpg') }}" alt="0">
          <div class="services-overlay">
            <div class="services-logo1"></div>
          </div>
        </div>
        <div class="services-detail">
          <div class="services-nama">
            <p>Express</p>
          </div>
          <div class="services-description">
            <p><i class="bi bi-journal-text"> </i>Regular Cargo Service</p>
            <p><i class="bi bi-stopwatch"> </i>Estimated Time to Arrival: 1-5 Day</p>
            <p><i class="bi bi-broadcast-pin"> </i>Coverage: All LA Cargo Service Area</p>
          </div>
        </div>
      </div>
      <div class="services-card">
        <div class="services-img">
          <img src="{{ asset('img/heavy-duty.jpg') }}" alt="0">
          <div class="services-overlay">
            <div class="services-logo2"></div>
          </div>
        </div>
        <div class="services-detail">
          <div class="services-nama">
            <p>Heavy Load</p>
          </div>
          <div class="services-description">
            <p><i class="bi bi-journal-text"> </i>Heavy Duty Cargo Service</p>
            <p><i class="bi bi-stopwatch"> </i>Estimated Time to Arrival: Relative</p>
            <p><i class="bi bi-broadcast-pin"> </i>Coverage: <span>Java & Madura</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
