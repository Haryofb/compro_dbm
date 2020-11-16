@extends('frontend.master')

@section('content')

<section id="team">
    <div class="container wow fadeInUp">
        <div class="section-header">
            <h3 class="section-title">stakeholder</h3>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

            {{-- <div class="col-lg-4 col-md-6"> --}}
                <div class="member">
                    <div class="avatar"><img src="/frontend/img/team-1.jpg" alt="" class="img-responsive img-thumbnail"></div>

                    <h4>{{$dir->name}}</h4>
                    <span>{{$dir->position->name}} of {{$dir->divition->name}}</span>
                    <br>
                    <p style="text-align: center">{{$dir->quote}}

                </div>
            {{-- </div> --}}
        <div>
            <div class="row">
                @foreach ($emp as $emp)
                <div class=" card testimonial-card col-lg-4 col-md-6" style="border:none; !important">
                    <div class="member">
                        <div class="avatar"><img src="/frontend/img/team-1.jpg" alt="" class="img-responsive img-thumbnail"></div>
                        <div class="card-body">
                        <h4>{{$emp->name}}</h4>
                        <span>{{$emp->position->name}} of {{$emp->divition->name}}</span>
                        <br>
                        <p style="text-align: justify">{{$emp->quote}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
  </section><!-- #team -->

  @endsection
