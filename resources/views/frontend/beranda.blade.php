@extends('template.base')
@section('title', 'Beranda')
@section('content')

@include('layout.menu.menu')
<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
        <!-- Item -->
        <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                    <h6>Selamat Datang Di Website Kami</h6>
                    <h4>KONVEKSI PONTIANAK<br>BERDIRI SEJAK 2016</h4>
                    <p>
                        Jasa Pembuatan Seragam Organisasi, Istansi, Dan Perusahaan (Negeri/Swasta).
                    </p>
                    <a href="contact.html" class="filled-button">Order Sekarang</a>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                    <h6>Selamat Datang Di Website Kami</h6>
                    <h4>KONVEKSI PONTIANAK<br>BERDIRI SEJAK 2016</h4>
                    <p>
                        Jasa Pembuatan Seragam Organisasi, Istansi, Dan Perusahaan (Negeri/Swasta).
                    </p>
                    <a href="contact.html" class="filled-button">Order Sekarang</a>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                    <h6>Selamat Datang Di Website Kami</h6>
                    <h4>KONVEKSI PONTIANAK<br>BERDIRI SEJAK 2016</h4>
                    <p>
                        Jasa Pembuatan Seragam Organisasi, Istansi, Dan Perusahaan (Negeri/Swasta).
                    </p>
                    <a href="contact.html" class="filled-button">Order Sekarang</a>
                </div>
            </div>
        </div>
        <!-- // Item -->
    </div>
</div>
<!-- Banner Ends Here -->

<div class="request-form">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>Kenapa Harus Konveksi Pontianak?</h4>
                <span style="text-align: justify;">
                    <h6><i class="fa fa-certificate"></i> Legalitas</h6>
                    <h6><i class="fa fa-certificate"></i> Harga Terjangkau</h6>
                    <h6><i class="fa fa-certificate"></i> Tim Profesional</h6>
                    <h6><i class="fa fa-certificate"></i> Quality Control</h6>
                    <h6><i class="fa fa-certificate"></i> Cepat Dan Ontime</h6>
                    <h6><i class="fa fa-certificate"></i> Pelayanan Ramah</h6>
                </span>
            </div>
            <div class="col-md-4">
                <a href="contact.html" class="border-button">Visi Misi</a>
            </div>
        </div>
    </div>
</div>



<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Hasil<em> Produksi</em></h2>
                    <span>Konveksi Pontianak</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{url ('public/template') }}/assets/images/produk/jaket.jpeg" alt="">
                    <div class="down-content">
                        <h4>Jaket Bomber</h4>
                        <!-- <div style="margin-bottom:10px;">
                            <span>from <sup>$</sup>120 per weekend</span>
                        </div>
                        <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p> -->
                        <a href="offers.html" class="filled-button">Galery</a>
                    </div>
                </div>

                <br>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{url ('public/template') }}/assets/images/produk/kaospolo.jpeg" alt="">
                    <div class="down-content">
                        <h4>Kaos Polo</h4>
                        <!-- <div style="margin-bottom:10px;">
                            <span>from <sup>$</sup>120 per weekend</span>
                        </div>
                        <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p> -->
                        <a href="offers.html" class="filled-button">Galery</a>
                    </div>
                </div>

                <br>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{url ('public/template') }}/assets/images/produk/kemeja2.jpeg" alt="">
                    <div class="down-content">
                        <h4>Kemeja PDL</h4>
                        <!-- <div style="margin-bottom:10px;">
                            <span>from <sup>$</sup>120 per weekend</span>
                        </div>
                        <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p> -->
                        <a href="offers.html" class="filled-button">Galery</a>
                    </div>
                </div>

                <br>
            </div>

        </div>
    </div>
</div>

<div class="fun-facts">
    <div class="container">
        <div class="more-info-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{url ('public/template') }}/assets/images/about-1-570x350.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="right-content">
                        <span>blog Artikel</span>
                        <h2>Get to know about <em>our company</em></h2>
                        <p>Curabitur pulvinar sem a leo tempus facilisis. Sed non sagittis neque. Nulla conse quat tellus nibh, id molestie felis sagittis ut. Nam ullamcorper tempus ipsum in cursus</p>
                        <a href="about.html" class="filled-button">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>
<!-- 
<div class="more-info">
    <div class="container">
        <div class="section-heading">
            <h2>Read our <em>Blog</em></h2>
            <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
        </div>

        <div class="row" id="tabs">
            <div class="col-md-4">
                <ul>
                    <li><a href='#tabs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
                    <li><a href='#tabs-2'>Mauris lobortis quam id dictum dignissim <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
                    <li><a href='#tabs-3'>Class aptent taciti sociosqu ad litora torquent per <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
                </ul>

                <br>

                <div class="text-center">
                    <a href="blog.html" class="filled-button">Read More</a>
                </div>

                <br>
            </div>

            <div class="col-md-8">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src="{{url ('public/template') }}/assets/images/blog-image-1-940x460.jpg" alt="">
                        <h4><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h4>
                        <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet.</p>
                    </article>
                    <article id='tabs-2'>
                        <img src="{{url ('public/template') }}/assets/images/blog-image-2-940x460.jpg" alt="">
                        <h4><a href="blog-details.html">Mauris lobortis quam id dictum dignissim</a></h4>
                        <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet</p>
                    </article>
                    <article id='tabs-3'>
                        <img src="{{url ('public/template') }}/assets/images/blog-image-3-940x460.jpg" alt="">
                        <h4><a href="blog-details.html">Class aptent taciti sociosqu ad litora torquent per</a></h4>
                        <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus eget.
                        </p>
                    </article>
                </section>
            </div>
        </div>


    </div>
</div> -->

<!-- <div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>What they say <em>about us</em></h2>
                    <span>testimonials from our greatest clients</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-testimonials owl-carousel">

                    <div class="testimonial-item">
                        <div class="inner-content">
                            <h4>George Walker</h4>
                            <span>Chief Financial Analyst</span>
                            <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                    </div>

                    <div class="testimonial-item">
                        <div class="inner-content">
                            <h4>John Smith</h4>
                            <span>Market Specialist</span>
                            <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                    </div>

                    <div class="testimonial-item">
                        <div class="inner-content">
                            <h4>David Wood</h4>
                            <span>Chief Accountant</span>
                            <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                    </div>

                    <div class="testimonial-item">
                        <div class="inner-content">
                            <h4>Andrew Boom</h4>
                            <span>Marketing Head</span>
                            <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                        </div>
                        <img src="http://placehold.it/60x60" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="callback-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Request a <em>call back</em></h2>
                    <span>Etiam suscipit ante a odio consequat</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="border-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
    </div>
</div> -->
@endsection