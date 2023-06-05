@extends('template.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="header">
                        <a href="{{ url('admin/blog') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>
                            Kembali</a>
                            <br><br>
                    </div>
                    
                    <div class="card-header">
                        <h3 class="title text-center">Edit Blog</h3>
                    </div>
                    <form action="{{ url('admin/blog', $blog->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Penulis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_penulis"
                                        value="{{ $blog->nama_penulis }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="judul" value="{{ $blog->judul }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-md-5">
                                    <img src="{{ url("public/$blog->gambar") }}" class="img-responsive"
                                        style="width:70% ; object-fit: cover">
                                </div>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control" name="gambar" accept=".jpg, .png, .jpeg"
                                        value="{{ $blog->gambar }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Isi Blog</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" name="isi" style="height: 100%">{{ $blog->isi }}</textarea>
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
