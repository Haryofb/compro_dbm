@extends('master')

@section('content')

<section id="team">
    <div class="container wow fadeInUp">
        <div class="section-header">
            <h3 class="section-title">stakeholder</h3>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
            <div class="row">
                @foreach ($quo as $q)
                <div class="col-lg-4 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="/img/team-1.jpg" alt=""></div>
                        <h4>{{$q->employee->name}}</h4>
                        <span>{{$q->position->name}} of {{$q->divition->name}}</span>
                        <br>
                        <p style="text-align: justify">{{$q->quote}}
                            <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
  </section><!-- #team -->

  @endsection
