@extends('frontend.master')

@section('content')

<section id="services">
    <div class="container wow fadeIn" >
        <div class="section-header" >
        <h3 class="section-title">Informasi</h3>
        <div class="col-lg-12" >
            <ul id="services-flters">
              <li data-filter=".1, .2, .3, .4" class="filter-active">All</li>
              {{-- @foreach ($cat as $cat)
              <li data-filter=".{{$cat->id}}">{{$cat->name}}</li>
              @endforeach --}}
          </ul>
         </div>
    </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card mb-3">
                        <img class="card-img-top" src="/frontend/img/portfolio/app1.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h4 class="card-title" style="text-align:center;">DRILLING</h4>
                    </div>
                </div>
            </div>
    </div>
</section><!-- #services -->

@endsection
