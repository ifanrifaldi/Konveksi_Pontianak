@extends('template.base')
@section('title', 'Berita')
@section('content')
@include('layout.menu.menu')
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>BERITA</h1>
                <span>KONVEKSI PONTIANAK</span>
            </div>
        </div>
    </div>
</div>

<div class="single-services">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <section class='tabs-content'>
                @foreach($list_berita as $berita)
                <article id='tabs-2'>
                        <img src="{{ url("public/$berita->gambar") }}" alt="{{$berita->gambar}}" class="img-fluid">
                        <h4><a href="blog-details.html">{{$berita->judul}}</a></h4>
                        <div style="margin-bottom:10px;">
                            <span>{{$berita->nama_penulis}} &nbsp;|&nbsp; {{ $berita->created_at->diffForHumans()  }} &nbsp;|&nbsp; 15 comments</span>
                        </div>
                        <!-- <p> {!! nl2br($berita->isi) !!}</p>
                        <br> -->
                        <div>
                            <a href="{{ url ("beritadetail/$berita->id")}}" class="filled-button">Baca Selengkapnya</a>
                        </div>
                    </article>

                    <br>
                    <br>
                    <br>
                @endforeach
                </section>
            </div>

            <div class="col-md-4">
                <h4 class="h4">Search</h4>

                <form id="search_form" name="gs" method="GET" action="#">
                    <input type="text" name="q" class="form-control form-control-lg" placeholder="type to search..." autocomplete="on">
                </form>

                <br>
                <br>

                <h4 class="h4">Recent posts</h4>

                <ul>
                    <li>
                        <h5 style="margin-bottom:10px;"><a href="blog-details.html">Dolorum corporis ullam, reiciendis inventore est repudiandae</a></h5>
                        <small><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</small>
                    </li>

                    <li><br></li>

                    <li>
                        <h5 style="margin-bottom:10px;"><a href="blog-details.html">Culpa ab quasi in rerum dolorum impedit expedita</a></h5>
                        <small><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</small>
                    </li>

                    <li><br></li>

                    <li>
                        <h5 style="margin-bottom:10px;"><a href="blog-details.html">Explicabo soluta corrupti dolor doloribus optio dolorum</a></h5>

                        <small><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br>
@endsection