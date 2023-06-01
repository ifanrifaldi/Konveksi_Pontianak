@extends('template.admin')
@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Komentar {{ $berita->judul }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="info-box bg-light">
                                    <div class="info-box-content">
                                        <img src="{{ url("public/$berita->gambar") }}" class="product-image">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h4>Komentar</h4>
                                @foreach ($list_komentar as $komentar)
                                
                                <div class="post" style="margin-top: 2%">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="{{ url('public/admin') }}/user.PNG"
                                            alt="user image">
                                        <span class="username">
                                            <a href="#">{{ $komentar->nama_pengirim }}</a>
                                        </span>
                                        <span class="description">{{ date("d-M-Y", strtotime($komentar->created_at)) }}</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        {!! nl2br($komentar->text) !!}
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary"><i class="fas fa-user"></i> {{ $berita->nama_penulis }}</h3>
                        <p class="text-muted">
                            {!! nl2br($berita->isi) !!}
                        </p>
                        <br>

                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
@endsection
