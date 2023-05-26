@extends('template.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="header">
                        <a href="{{ url('admin/berita') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                            Kembali</a>
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Edit Berita</h3>
                    </div>
                    <form action="{{ url('admin/berita', $berita->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Penulis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_penulis"
                                        value="{{ $berita->nama_penulis }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-md-5">
                                    <img src="{{ url("public/$berita->gambar") }}" class="img-responsive"
                                        style="width:70% ; object-fit: cover">
                                </div>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control" name="gambar" accept=".jpg, .png, .jpeg"
                                        value="{{ $berita->gambar }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Isi Berita</label>
                                <div class="col-sm-10">
                                    <textarea id="compose-textarea" class="form-control" name="isi" style="height: 100%">{{ $berita->isi }}</textarea>
                                </div>
                            </div>


                        </div>
                        <div class="card-footer">
                            <div class="offset-sm-2 col-sm-10">
                                <button class="btn btn-primary float-right"><span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
