@extends('frontend.master')

@section('content')

{{-- <section id="hero" > --}}
    {{-- <style>
	.jw-slideshow{
		margin: 100 auto;
	    width: 768;
	    height: 90vh;
	    background: rgb(87, 86, 86);
	    opacity: 0.7;
	    color: rgb(255, 255, 255);
	    /* padding-top: 400px; */
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
    </style> --}}

{{-- <div class="hero-container" >
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
    </div>
            <div class="jw-slideshow">
                <h1>DJAVA BERKAH MINERAL</h1>
                <h4>SOLID, TRUSTED AND ACCOUNTABLE PARTNER</h4>
            </div>
</div> --}}

<style>
    .container-fluid.main{
  position: relative; /* To make the navbar positions relative to this container */
  padding: 0;
}


.carousel .background {
  background-position: center center;
  background-size: 100% 100%;
  background-repeat: no-repeat;
  height: 800px;
}

@media (max-width:991px) {
  .carousel .background {
    background-size: cover; /* To make the background image looks good */
  }
}

.carousel .background.a {
  background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../frontend/img/img_0337707x472.jpg");
}

.carousel .background.b {
  background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../frontend/img/img_03062.jpg");
}

.carousel .background.c {
  background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../frontend/img/img_0150.jpg");
}

.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition: opacity 0.5s; /* The 0.5s describes the duration to make the opacity from 0 to 1 */
}

.carousel-fade .carousel-inner .active {
  opacity: 1;
}

/* CSS Hack to trigger GPU for smooth transition */
@media all and (transform-3d),
(-webkit-transform-3d) {
  .carousel-fade .carousel-inner > .item.next,
  .carousel-fade .carousel-inner > .item.active.right {
    opacity: 0;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  .carousel-fade .carousel-inner > .item.prev,
  .carousel-fade .carousel-inner > .item.active.left {
    opacity: 0;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  .carousel-fade .carousel-inner > .item.next.left,
  .carousel-fade .carousel-inner > .item.prev.right,
  .carousel-fade .carousel-inner > .item.active {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
/* CSS Hack to trigger GPU for smooth transition */

.covertext {
  position: absolute; /* To make the div to be place anywhere. It is out of the document flow */
  top: 300px; /* The distance between the div with the top of document */
  left: 0px; /* Make the div full width */
  right: 0px; /* Make the div full width */
}

.title {
  font-family: Verdana;
  font-weight: 600;
  font-size: 60px;
  color: #ffffff;
  text-align: center;
}

.subtitle {
  font-family: Verdana;
  font-size: 23px;
  color: #ffffff;
  text-align: center;
}


</style>

<div class="container-fluid main">

    <div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner" role="listbox">
        <div class="item active background a"></div>
        <div class="item background b"></div>
        <div class="item background c"></div>
      </div>
    </div>

    <div class="covertext">
      <div class="col-lg-10" style="float:none; margin:0 auto;">
        <h1 class="title">DJAVA BERKAH MINERAL</h1>
        <h3 class="subtitle">SOLID, TRUSTED AND ACCOUNTABLE PARTNER</h3>
    </div>
</div>

  </div>

<script>
    $('.carousel').carousel({
    pause: "false" /* Change to true to make it paused when your mouse cursor enter the background */
});
</script>

  @endsection
