@extends('frontend.master')

@section('content')

<section id="about">
    <div class="container">
      <div class="row about-container">

        <div class="col-lg-6 content order-lg-1 order-2">
          <h2 class="title" style="text-align:justify;">Tentang Kami</h2>
          <p>
            PT. Djava Berkah Mineral selaku perusahaan yang bergerak dibidang Pertambangan memiliki komitmen terhadap Mutu untuk mencapai Kinerja yang optimal dalam mendapatkan kepercayaan dan kepuasan pelanggan.
          </p>

            <div class="icon-box wow fadeInUp">
                <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                <h4 class="title"><a href="">Visi</a></h4>
                <p class="description" style="text-align:justify;">Menjadi Perusahaan Nasional yang Mengembangkan Penggunaan Aspek Sumber Daya Lokal Dengan Proses Pengembangan yang Berkesinambungan.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                <div class="icon"><i class="fa fa-photo"></i></div>
                <h4 class="title"><a href="">Misi</a></h4>
                <p class="description" style="text-align:justify;">Mengembangkan Sumber Daya Mannusia, Teknologi dan Konsep Dasar Proses yang Efisien, Tepat Guna Untuk Memenuhi Pasar Nasional dan Kepuasan Pelanggan.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                <div class="icon"><i class="fa fa-bar-chart"></i></div>
                <h4 class="title"><a href="">Nilai Kami</a></h4>
                <p class="description" style="text-align:justify;">Menyediakan Kesempatan Jangka Panjang yang BerkesinambunganDalam Proses Pengembangan Sumber Daya Sebagai Komitmen Kami Kepada Pelanggan dan Negara</p>
            </div>

            </div>

            <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight">
                {{-- <img src="/frontend/img/about-img.jpg"> --}}
            </div>
        </div>
    </div>
  </section>
  <!-- #about -->
@endsection
