@php
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <ul class="left-info">
                    <li><a href="#"><i class="fa fa-envelope"></i>konvekasipontianak@gmail.com
                        </a></li>
                    <li><a href="tel:081545010209"><i class="fa fa-phone"></i>0815-4501-0209 
                        </a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="right-icons">
                    <li><a href="https://www.facebook.com/muhammad.hotip.520"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://youtube.com/@konveksipontianak"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="https://instagram.com/konveksipontianak_official?igshid=NTc4MTIwNjQ2YQ"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://wa.me/081545010209"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="{{ url('public/template') }}/assets/images/kpk.png"
                    alt="logo-small" class="logo-sm" style="height: 45px; margin-right:2%;"></a>
            <!-- <div class="brand">
    <a href="crm-index.html" class="logo">
            <span>
                <img src="{{ url('public/template') }}/assets/images/ktp.jpg" alt="logo-small" class="logo-sm" style="height: 45px; margin-right:2%;" >
            </span>
        </a>
    </div> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link {{ checkRouteActive('/') }}" href="{{ url('/') }}">Beranda
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('berita') }} {{ checkRouteActive('beritadetail') }}"
                            href="{{ url('berita') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('profil') }} {{ checkRouteActive('beritadetail') }}"
                            href="{{ url('profil') }}">Profil</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link {{ checkRouteActive('visimisi') }} {{ checkRouteActive('team') }} "
                            data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">Profil</a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('visimisi') }}">Visi Misi</a>
                            <a class="dropdown-item" href="{{ url('team') }}">Team</a>
                          
                        </div>
                    </li> -->
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('blog') }} {{ checkRouteActive('blogdetail') }}"
                            href="{{ url('blog') }}">Blog</a>
                    </li> --}}

                    @yield('menu')
                    <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('galery') }}" href="{{ url('galery') }}">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('caraorder') }} " href="{{ url('caraorder') }}">Cara
                            Order</a>
                    </li>
                    <!-- <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>
