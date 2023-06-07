@extends('template.base')
@section('title', 'Profil')
@section('content')

@include('layout.menu.menu')
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>PROFIL</h1>
                <span>KONVEKSI PONTIANAK</span>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <section class='tabs-content'>
                <img src="{{url ('public/template') }}/assets/images/struktur.jpg" alt="">
            </section>
        </div>
    </div>
</div>
<br>
<br>
<div class="request-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Konveksi Pontianak?</h4>
                <span style="text-align: justify;">
                    <h7><b>Konveksi Pontianak </b>merupakan perusahaan jasa pembuatan seragam perusahaan (swasta/negri), instansi(swasta/negri), dan organisasi (okp/ormas/ormawa). Secara spesifik, seperti seragam kemeja, rompi, kaos (oblong/kerah), jaket (bomber/parka/hoodie), dll (pdh/pdl).
                    </h7>
                    <br>
                    <br>
                    <h7> <b>Konveksi Pontianak </b>berdiri pada tahun 10 april 2016 dan baru di legalkan pada tahun 2019 dibawah naungan cv. Bahri khatulistiwa abadi, sampai tahun 2023 dan berganti perusahaan pada awal tahun 2023 dibawah naungan PT. Industri Kreatif Nusantara.
                    </h7>
                    <br>
                    <br>
                    <h7> <b>Konveksi Pontianak </b>di kelola oleh profesional muda kreativ dan inovatif, serta mempunyai semangat kerja yang tinggi. Atas kepercayaan dari client yang masih bekerjasama dengan kami, kami sangat menjaga kualitas dan kepercayaan konsumen.
                    </h7>
                    <br>
                    <br>
                    <h7> <b>Konveksi Pontianak </b>terus menerus mengembangkan sumber daya yang dimiliki, baik manusianya maupun alat-alat pendukung usaha. Berdasarkan perkembangan bisnis yang kami miliki, kami telah mampu memenuhi kepuasan pelanggan dengan mencapai nilai optimal dan mampu memberikan service dan harga jual yang kompetetif.
                    </h7>
                    <br>
                    <br>
                    <h7> <b>Konveksi Pontianak </b>bersifat transparan, efektif, dan efisien.
                    </h7>
                    <br>
                    <br>
                    <h7> <b>Konveksi Pontianak </b>bertujuan berkarya dan Berinovasi dalam semua aktifitasnya agar bisa bersaing di dalam pasar lokal, nasional maupun internasional.
                        Meliputi:

                    </h7>

                </span>
                <div class="contact-information" style="margin-top: 25px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="contact-item">
                                    <i class="fa fa-globe"></i>
                                    <h6 style="color: black;">Digitalisasi</h6>
                                    <!-- <a href="#">+1 333 4040 5566</a> -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="contact-item">
                                    <i class="fa fa-thumbs-up"></i>
                                    <h6 style="color: black;">Skill</h6>
                                    <!-- <a href="#">+1 333 4040 5566</a> -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="contact-item">
                                    <i class="fa fa-home"></i>
                                    <h6 style="color: black;">Produktifitas</h6>
                                    <!-- <a href="#">+1 333 4040 5566</a> -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="contact-item">
                                    <i class="fa fa-users"></i>
                                    <h6 style="color: black;">Kreatifitas</h6>
                                    <!-- <a href="#">+1 333 4040 5566</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div style="text-align: center;">
                    <span>
                        <h5><b style="color: rgb(22, 95, 20);">"Konveksi Pontianak Bermoto</b> Be empowered and useful"
                        </h5>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="more-info-content">
        <div class="right-content">
            <h5 style="color: rgb(164, 198, 57);"><i class="fa fa-certificate"></i> VISI</h5>
            <br>
            <h6 >Menjadi sumber kebahagaiaan yang damai dan aman bagi pemegang saham, karyawan,pelanggan, maupun masyarakat.</h6>
            <br>
            <h5 style="color: rgb(164, 198, 57);"><i class="fa fa-certificate"></i> MISI</h5>
            <br>
            <h6>> Mengedepankan pelayanan yang bermutu</>
            <h6>> Memberikan hasil yang berkualitas</h6>
            <h6>> Menjadi acuan tata kelola administrasi yang baik</h6>
            <h6>> Menciptakan ruang yang nyaman, aman dan damai bagi karyawan, konsumen, dan masyarakat umum.</h6>
        </div>
    </div>
</div>
<div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="left-content">
              <span>Lorem ipsum dolor sit amet</span>
              <h2>Modi esse sapiente tenetur <em>impedit laudantium laborum</em></h2>
              <p>Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum. Nulla luctus laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue. 
              <br><br>Fusce et venenatis ex. Quisque varius, velit quis dictum sagittis, odio velit molestie nunc, ut posuere ante tortor ut neque.</p>
            </div>
          </div>
          
        </div>
      </div>
    </div>

@endsection