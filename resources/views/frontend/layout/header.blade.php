<header id="header">
    <div class="container">

    <div id="logo" class="pull-left">
        {{-- <a href="{{ route('frontend') }}">
            <img src="/frontend/img/logo-web.png"></img> --}}
            <!-- Uncomment below if you prefer to use a text logo -->
            <h1><a href="{{ route('frontend') }}">
            <img src="/frontend/img/logo-tittle.png"></img></h1>
    </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu justify-content-center">
            <li><a href="{{ route ('frontend') }}">BERANDA</a></li>
            <li class="menu-has-children"><a href="#about">TENTANG KAMI</a>
                <ul>
                    <li><a href="{{ route ('about') }}">TENTANG KAMI</a></li>
                    <li><a href="{{ route ('stakeholder') }}">STAKEHOLDER</a></li>
                    <li><a href="{{ route ('statistic') }}">STATISTIK</a></li>
                </ul>
            </li>
            <li><a href="{{ route ('service') }}">LAYANAN</a></li>
            <li><a href="{{ route ('gallery') }}">GALERI</a></li>
            <li><a href="{{ route ('info') }}">INFO</a></li>
            <li><a href="{{ route ('event') }}">EVENT</a></li>
            <li><a href="#contact">KONTAK KAMI</a></li>
            <li class="menu-has-children"><a href="">BAHASA</a>
                <ul>
                    <li><a href="#">INDONESIA</a></li>
                    <li><a href="#">INGGRIS</a></li>
                </ul>
            <li><a href="{{ route('login') }}">Login</a></li>

            </li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
