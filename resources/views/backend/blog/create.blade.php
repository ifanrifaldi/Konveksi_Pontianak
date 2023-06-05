@extends('template.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Blog</h3>
                    </div>
                    <form action="{{ url('admin/blog') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Penulis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_penulis" placeholder="Nama Penulis" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="judul" placeholder="Judul">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="gambar" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Isi Blog</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control summernote" name="isi" style="height: 100%"></textarea>
                                </div>
                            </div>

                            
                        </div>
                        <div class="card-footer">
                            <div class="offset-sm-2 col-sm-10">
                            <button class="btn btn-info">Simpan</button>
                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
