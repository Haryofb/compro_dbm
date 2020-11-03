<header id="header">
    <div class="container">

    <div id="logo" class="pull-left"><a href="{{ route('home') }}">
            <img src="/img/logo-web.png">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!--<h1><a href="#hero">Regna</a></h1>--></a>
    </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
            <li><a href="{{ route ('home') }}">BERANDA</a></li>
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
            </li>

            {{-- <li class="menu-has-children"><a href="">Drop Down</a>
                <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="menu-has-children"><a href="#">Drop Down 2</a>
                    <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li>
                </ul>
            </li>
            <li><a href="#contact">Contact Us</a></li> --}}
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
