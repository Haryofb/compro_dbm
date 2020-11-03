@extends('master')

@section('content')

<section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="section-header">
        <h3 class="section-title">galery</h3>
      </div>
      <div class="row">

        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-logo">Logo</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row" id="portfolio-wrapper">
        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="/img/portfolio/app1.jpg" alt="">
            <div class="details">
              <h4>App 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>
      </div>

    </div>
  </section><!-- #portfolio -->

  @endsection
