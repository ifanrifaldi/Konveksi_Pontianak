@extends('template.admin')
@section('content')
    <div class="container-fluid">
        <div class="card card-solid">
            <div class="card-body">
                <div class="header">
                    <a href="{{ url('admin/blog') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                        Kembali</a>
                        <br><br>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">
                            {{ $blog->judul }}
                        </h3>
                        <div class="col-12">
                            <img src="{{ url("public/$blog->gambar") }}" class="product-image">
                        </div>

                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">{{ $blog->judul }}</h3>
                        <label for="">
                            Nama Penulis : {{ $blog->nama_penulis }}
                        </label>
                        <hr>
                        <h4>Deskripsi</h4>
                        <div>
                            <p >
                                {!! nl2br($blog->isi) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
