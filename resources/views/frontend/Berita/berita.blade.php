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
                        @foreach ($list_berita as $berita)
                            <br><br>
                            <article id='tabs-2'>
                                <a href="{{ url("blog-detail/$berita->id") }}" target="_blank">
                                    <img src="{{ url("public/$berita->gambar") }}" class="img-fluid">
                                </a>
                                <h4><a href="{{ url("blog-detail/$berita->id") }}">{{ $berita->judul }}</a></h4>
                                <div style="margin-bottom:10px;">
                                    <span>{{ $berita->nama_penulis }} &nbsp;|&nbsp;
                                        {{ $berita->created_at->diffForHumans() }} &nbsp;|&nbsp; 15 comments</span>
                                </div>

                                <div>
                                    <a href="{{ url("blog-detail/$berita->id") }}" class="filled-button">Baca
                                        Selengkapnya</a>
                                </div>
                            </article>
                        @endforeach

                    </section>
                </div>

                <div class="col-md-4">
                    <h4 class="h4">Search</h4>

                    <form id="search_form" name="gs" method="GET" action="#">
                        <input type="text" name="q" class="form-control form-control-lg"
                            placeholder="type to search..." autocomplete="on">
                    </form>

                    <br>
                    <br>

                    <h4 class="h4">Blog Terbaru</h4>
                    <br>
                    <ul>
                        @foreach ($list_berita as $berita)
                            <li>
                                <h5 style="margin-bottom:10px;"><a
                                        href="{{ url("blog-detail/$berita->id") }}">{{ $berita->judul }}</a></h5>
                                <small><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                                    {{ date('d-m-Y', strtotime($berita->created_at)) }} |
                                    {{ $berita->created_at->diffForHumans() }} </small>
                            </li>
                            <li><br></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection
