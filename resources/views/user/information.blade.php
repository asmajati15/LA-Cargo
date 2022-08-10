@extends('user/layout')

@section('title')
  Information
@endsection

@section('content')
  <div class="container info">
    <div class="info-grid-container">
      <div class="info-grid1">
        <ul class="info-button">
          <a class="button-info" href="#shipping-desc"><li class="list-info"><i class="bi bi-truck"> </i> Shipping</li></a>
          <a class="button-info" href="#services-desc"><li class="list-info"><i class="bi bi-box-seam"> </i> Services</li></a>
          <a class="button-info" href="#restriction-desc"><li class="list-info"><i class="bi bi-exclamation-circle"> </i> Restriction</li></a>
          <a class="button-info" href="#insurance-desc"><li class="list-info"><i class="bi bi-bandaid"> </i> Insurance</li></a>
          <a class="button-info" href="#return-desc"><li class="list-info"><i class="bi bi-clipboard-x"> </i> Return Shipment</li></a>
        </ul>
      </div>
      <div class="info-grid2">
        <div class="info-desc">
          <div class="info-desc py-3" id="shipping-desc">
            <h5>Shipping</h5>
            <button class="collapsible">How to find out the shipping cost?</button>
            <div class="collapsible-content">
              <p>You can go to the <a href="{{ url('/shipping') }}">CHECK RATES</a> menu and choose the city of origin and destination according to your needs.</p>
            </div>
            <button class="collapsible">What to pay attention to when sending goods?</button>
            <div class="collapsible-content">
              <p>You need to make sure the name, address, destination city, district, postal code and phone numbers of the sender and recipient are correct.</p>
            </div>
          </div>
          <div class="info-desc py-3" id="services-desc">
            <h5>Services</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam consequatur provident tempore! Perferendis
              magni aperiam enim ea porro vero accusantium amet omnis quam obcaecati non similique, atque maxime!
              Temporibus
              beatae vitae esse corporis veritatis pariatur cum iure quae totam quidem eius accusamus dolorem fugit dolor
              optio molestiae non, enim nulla repudiandae sint dicta? Nam ducimus asperiores adipisci quas! Fugit saepe
              officiis architecto assumenda consequuntur repudiandae facere quam quas est atque laborum maiores porro, ea
              consectetur, illum obcaecati nihil voluptas ad id ut modi excepturi mollitia exercitationem labore! Nihil,
              molestiae, corrupti incidunt nisi molestias rem sint adipisci accusamus dignissimos quam autem.</p>
          </div>
          <div class="info-desc py-3" id="restriction-desc">
            <h5>Restriction</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam consequatur provident tempore! Perferendis
              magni aperiam enim ea porro vero accusantium amet omnis quam obcaecati non similique, atque maxime!
              Temporibus
              beatae vitae esse corporis veritatis pariatur cum iure quae totam quidem eius accusamus dolorem fugit dolor
              optio molestiae non, enim nulla repudiandae sint dicta? Nam ducimus asperiores adipisci quas! Fugit saepe
              officiis architecto assumenda consequuntur repudiandae facere quam quas est atque laborum maiores porro, ea
              consectetur, illum obcaecati nihil voluptas ad id ut modi excepturi mollitia exercitationem labore! Nihil,
              molestiae, corrupti incidunt nisi molestias rem sint adipisci accusamus dignissimos quam autem.</p>
          </div>
          <div class="info-desc py-3" id="insurance-desc">
            <h5>Insurance</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam consequatur provident tempore! Perferendis
              magni aperiam enim ea porro vero accusantium amet omnis quam obcaecati non similique, atque maxime!
              Temporibus
              beatae vitae esse corporis veritatis pariatur cum iure quae totam quidem eius accusamus dolorem fugit dolor
              optio molestiae non, enim nulla repudiandae sint dicta? Nam ducimus asperiores adipisci quas! Fugit saepe
              officiis architecto assumenda consequuntur repudiandae facere quam quas est atque laborum maiores porro, ea
              consectetur, illum obcaecati nihil voluptas ad id ut modi excepturi mollitia exercitationem labore! Nihil,
              molestiae, corrupti incidunt nisi molestias rem sint adipisci accusamus dignissimos quam autem.</p>
          </div>
          <div class="info-desc py-3" id="return-desc">
            <h5>Return Shipment</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam consequatur provident tempore! Perferendis
              magni aperiam enim ea porro vero accusantium amet omnis quam obcaecati non similique, atque maxime!
              Temporibus
              beatae vitae esse corporis veritatis pariatur cum iure quae totam quidem eius accusamus dolorem fugit dolor
              optio molestiae non, enim nulla repudiandae sint dicta? Nam ducimus asperiores adipisci quas! Fugit saepe
              officiis architecto assumenda consequuntur repudiandae facere quam quas est atque laborum maiores porro, ea
              consectetur, illum obcaecati nihil voluptas ad id ut modi excepturi mollitia exercitationem labore! Nihil,
              molestiae, corrupti incidunt nisi molestias rem sint adipisci accusamus dignissimos quam autem.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
