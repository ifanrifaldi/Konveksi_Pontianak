@extends('template.admin')
@section('content')
    <section class="content">


        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Komentar {{ $blog->judul }}</h3>

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
                                        <img src="{{ url("public/$blog->gambar") }}" class="product-image">
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
                                            <button class="btn btn-primary float-right" data-toggle="modal"
                                                data-target="#modal-komentar{{ $komentar->id }}">
                                                <span class="fa fa-comment"></span>
                                                Balas Komentar
                                            </button>
                                            <img class="img-circle img-bordered-sm" src="{{ url('public/admin') }}/user.PNG"
                                                alt="user image">
                                            <span class="username">
                                                <a href="#">{{ $komentar->nama_pengirim }}</a>
                                            </span>
                                            <span
                                                class="description">{{ date('d-M-Y', strtotime($komentar->created_at)) }}</span>
                                        </div>

                                        <p>
                                            {!! nl2br($komentar->text) !!}
                                        </p>
                                    </div>

                                    @foreach ($list_balasan_komentar as $balasan_komentar)
                                        @if ($balasan_komentar->id_komentar == $komentar->id)
                                            <div class="post" style="margin-top: 2%">
                                                <div class="user-block">

                                                    <img class="img-circle img-bordered-sm float-right"
                                                        src="{{ url('public/admin') }}/user.PNG" alt="user image">
                                                    <span class="username float-right">
                                                        <a href="#">{{ $balasan_komentar->nama_pengirim }}</a>
                                                    </span>
                                                    <br>
                                                    <span
                                                        class="description float-right">{{ date('d-M-Y', strtotime($balasan_komentar->created_at)) }}
                                                    </span>
                                                </div>

                                                <h5 style="text-align: right">

                                                    {!! nl2br($balasan_komentar->text) !!}
                                                </h5>

                                            </div>
                                        @endif
                                    @endforeach


                                    <div class="modal fade" id="modal-komentar{{ $komentar->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Balas Komentar {{ $komentar->nama_pengirim }}
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('admin/blog/store-balasan') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="text" name="id_blog" class="form-control"
                                                        value="{{ $komentar->id_blog }}" hidden>
                                                    <input type="text" name="id_komentar" class="form-control"
                                                        value="{{ $komentar->id }}" hidden>
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Masukan Pesan
                                                                Anda</label>
                                                            <div class="col-sm-9">
                                                                <textarea name="text" class="form-control summernote"></textarea>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer content-between">
                                                        <button class="btn btn-primary float-right"><span
                                                                class="fa fa-paper-plane"></span> Kirim</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary"><i class="fas fa-user"></i> {{ $blog->nama_penulis }}</h3>
                        <p class="text-muted">
                            {!! nl2br($blog->isi) !!}
                        </p>
                        <br>

                    </div>
                </div>
            </div>

        </div>


    </section>
@endsection
