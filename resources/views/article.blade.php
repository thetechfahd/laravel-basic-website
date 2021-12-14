@extends('layout')

@section('content')
  <!--About-Section-Start-->
  <section id="about">
    <div class="container">
      <div class="col-md-8 col-md-offset-2">
        <div class="heading">
          <h2>B <span>LOG</span></h2>
          <div class="line"></div>
          <p><span><strong>{{$Article->title}}</strong></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ab-sec">
          <div class="col-md-6">
            <h3 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">{{$Article->excerpt}}</h3>
            <p>{{$Article->body}} </p>
          </div>
          <div class="col-md-6 ab-sec-img wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms"><img src="images/Aboutus/01.jpg" alt=""> </div>
        </div>
      </div>
    </div>
  </section>

@endsection