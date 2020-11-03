<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Djava Berkah Mineral</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="/img/logo-tittle.png" rel="icon">
  <link href="/img/logo-tittle.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->

    @include('layout.header')

  <!--==========================
    Hero Section
  ============================-->


  <main id="main">

    <!--==========================
      About Us Section
    ============================-->

    @yield('content')

    {{-- @include('home.statistic') --}}

     <!--==========================
      Team Section
    ============================-->

    {{-- @include('home.team') --}}


    <!--==========================
      Services Section
    ============================-->
    {{-- @include('home.service') --}}

    <!--==========================
      Gallery Section
    ============================-->

    {{-- @include('home.gallery') --}}

    <!--==========================
      Info Section
    ============================-->

    {{-- @include('home.info') --}}

    <!--==========================
      Contact Section
    ============================-->

    @include('home.contact')

  </main>

  <!--==========================
    Footer
  ============================-->


  @include('layout.footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/wow/wow.min.js"></script>
  <script src="/lib/counterup/counterup.min.js"></script>
  <script src="/lib/waypoints/waypoints.min.js"></script>
  <script src="/lib/superfish/hoverIntent.js"></script>
  <script src="/lib/superfish/superfish.min.js"></script>


  <!-- Contact Form JavaScript File -->
  <script src="/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/js/main.js"></script>

</body>
</html>

{{-- Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> --}}
