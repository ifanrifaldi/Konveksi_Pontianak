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
                        <h3 class="card-title">Data Prosedur Produksi</h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Prosedur Produksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_prosedur_produksi as $prosedur_produksi)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">

                                                <a class="btn btn-warning" data-toggle="modal"
                                                    data-target="#modal-edit{{ $prosedur_produksi->id }}"><span
                                                        class="fa fa-edit"></span></a>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/prosedur/produksi', $prosedur_produksi->id),
                                                ])
                                            </div>
                                        </td>
                                        <td class="text">{!! nl2br($prosedur_produksi->nama)!!}</td>

                                    </tr>
                                    <div class="modal fade" id="modal-edit{{ $prosedur_produksi->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Prosedur Produksi</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('admin/prosedur/produksi', $prosedur_produksi->id) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Prosedur Produksi</label>
                                                            <div class="col-sm-10">

                                                                <textarea class="form-control summernote" name="nama">{{ $prosedur_produksi->nama }}</textarea>

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
                    <h4 class="modal-title">Tambah Data Prosedur Produksi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/prosedur/produksi') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Prosedur Produksi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control summernote" name="nama"></textarea>
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
