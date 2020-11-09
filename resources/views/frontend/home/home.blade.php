@extends('frontend.master')

@section('content')

{{-- <section id="hero" > --}}
    {{-- <div class="hero-container" > --}}
      {{-- <h1 >Djava Berkah Mineral</h1> --}}
      {{-- <h4 style="color: antiquewhite">SOLID, TRUSTED AND ACCOUNTABLE PARTNER</h4> --}}
    {{-- </div> --}}

    {{-- <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="10000">
            <img src="../frontend/img/img_0337707x472.jpg" class="d-block w-100" style="max-height: 90vh !important">
            <div class="carousel-caption d-none d-md-block" style="text-align: center;!important">
                <h1 style="text-align: center">First slide label</h1>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="../frontend/img/img_03062.jpg" class="d-block w-100" style="max-height: 90vh !important">
            <div class="carousel-caption d-none d-md-block" >
                <h1 >First slide label</h1>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="../frontend/img/img_0150.jpg" class="d-block w-100" style="max-height: 90vh !important">
            <div class="carousel-caption d-none d-md-block">
                <h1>First slide label</h1>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
          </div>
        </div>

      </div>
  </section> --}}
  <!-- #hero -->

{{-- <section id="hero" > --}}
    <style>
	.jw-slideshow{
		margin: 100 auto;
	    width: 768;
	    height: 90vh;
	    background: rgb(87, 86, 86);
	    opacity: 0.7;
	    color: rgb(255, 255, 255);
	    padding-top: 400px;
	    font-weight: bold;
        font-size: 6em;
    }
    .jw-slideshow h1{
        text-align: center;
        font-size: 1em;
    }
    .jw-slideshow h4{
		text-align: center;
	}
    </style>

<div class="hero-container" >
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="max-height: 90vh;position:absolute !important">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../frontend/img/img_0337707x472.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../frontend/img/img_03062.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../frontend/img/img_0150.jpg" alt="Third slide">

            </div>
        </div>
            <div class="jw-slideshow">
                <h1>DJAVA BERKAH MINERAL</h1>
                <h4>SOLID, TRUSTED AND ACCOUNTABLE PARTNER</h4>
            </div>
        </div>
</div>
{{-- </section> --}}


  {{-- <style>
	.jw-slideshow{
		margin: 100 auto;
	    width: 768;
	    height: 90vh;
	    background: #000;
	    opacity: 0.7;
	    color: #FFF;
	    padding-top: 400px;
	    font-weight: bold;
	    font-size: 6em;
	}
	.jw-slideshow h1{
        text-align: center;
        font-size: 1em;

	}
	.jw-slideshow h4{
		text-align: center;

	}
	</style>

	<div class="jw-slideshow">
		<h1>DJAVA BERKAH MINERAL</h1>
		<h4>SOLID, TRUSTED AND ACCOUNTABLE PARTNER</h4>

	</div>
    <script src="https://code.jquery.com/jquery-1.10.2.js" integrity="sha256-it5nQKHTz+34HijZJQkpNBIHsjpV8b6QzMJs9tmOBSo=" crossorigin="anonymous"></script>
    <script src="jquery.backstretch.min.js"></script>
	<script type="text/javascript">
		$.backstretch(
		[
			"url (../frontend/img/img_0150.jpg)",
			"url(../frontend/img/img_03062.jpg)",
			"url(../frontend/img/img_0337707x472.jpg)"
		],
		{
			duration: 1200,
			fade: 600
		});
	</script> --}}
  @endsection
