@extends('template.base')
@section('title', 'Berita')
@section('content')
    @include('layout.menu.menu')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $berita->judul }}</h1>
                    <span><i class="fa fa-user"></i> {{ $berita->nama_penulis }} &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                        {{ $berita->created_at->diffForHumans() }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info about-info">
        <div class="container">
            <div class="more-info-content">
                <div class="right-content">
                    <div>
                        <img src="{{ url("public/$berita->gambar") }}" alt="{{ $berita->gambar }}" class="img-fluid">
                    </div>
                    <br>
                    <h1 style="text-align: justify;">{!! nl2br($berita->isi) !!}</h1>
                </div>
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button"> Masukan Komentar
                    Anda</a>
            </div>
        </div>
    </div>

    <div class="callback-form contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Hasil <em>Penilaian</em></h2>
                        <span>
                            
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-form">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" style="margin-top: 70px;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="{{ url('store-komentar') }}" method="POST">
                    @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukan Komentar Anda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" value="{{ $berita->id }}" name="id_berita" hidden>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <fieldset>
                                    <input type="text" class="form-control" name="nama_pengirim" placeholder="Masukan Nama Anda"
                                        required="">
                                </fieldset>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <fieldset>
                                    <input type="email" class="form-control" name="email_pengirim" placeholder="Masukan Email Anda"
                                        required="">
                                </fieldset>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <fieldset>
                            <textarea type="text" class="form-control" name="text"></textarea>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button class="btn btn-primary"> Kirim Komentar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
