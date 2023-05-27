@extends('template.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

                        <button type="button" class="btn btn-primary float-right mb-10" data-toggle="modal"
                            data-target="#modal-lg"><span class="fa fa-plus"></span> Tambah Data
                        </button>
                        <h3 class="card-title">Data Misi Konveksi</h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Misi Konveksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_misi as $misi)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">

                                                <a class="btn btn-warning" data-toggle="modal"
                                                    data-target="#modal-edit{{ $misi->id }}"><span
                                                        class="fa fa-edit"></span></a>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/profil/misi', $misi->id),
                                                ])
                                            </div>
                                        </td>
                                        <td class="text">{!! nl2br($misi->misi)!!}</td>

                                    </tr>
                                    <div class="modal fade" id="modal-edit{{ $misi->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Misi Konveksi</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('admin/profil/misi', $misi->id) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Misi Konveksi</label>
                                                            <div class="col-sm-10">

                                                                <textarea class="form-control summernote" name="misi">{{ $misi->misi }}</textarea>

                                                            </div>
                                                        </div>



                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button class="btn btn-default"
                                                            data-dismiss="modal">Kembali</button>
                                                        <button class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Misi Konveksi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/profil/misi') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Misi Konveksi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control summernote" name="misi"></textarea>
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-default" data-dismiss="modal">Kembali</button>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
