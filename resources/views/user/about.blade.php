@extends('user/layout')

@section('title')
  About Us
@endsection

@section('content')
  <div class="container">
    <div class="commitment text-center py-5 px-3">
      <h2>About Us</h2>
      <div class="row align-items-center flex-column-reverse flex-lg-row pb-5 flex-sm-row">
        <div class="col-sm">
          <div class="commitment-image1">
            <img src="{{ asset('img/josiah-farrow-ucuOscdCaO4-unsplash.jpg') }}" class="mx-auto d-block" alt="">
          </div>
        </div>
        <div class="col-sm">
          <div class="commitment-caption">
            <h5>Green Delivery</h5>
            <p>By the year 2050 we want to reduce all logistics-related emissions to zero – a highly ambitious goal. Our
              mission as the leading mail and logistics company is to connect people and improve lives.</p>
          </div>
        </div>
      </div>
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
@endsection
