@extends('layout.master')
@section('new-class', 'second-nav')



@section('content')

<section class="service-details">
    <div class="container mt-5 d-flex justify-content-center">

      <div class="row justify-content-center">
        <div class="col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/service-details-1.jpg" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">Our Mission</a></h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


@endsection