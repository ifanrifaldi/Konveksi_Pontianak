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
                        <h3 class="card-title">Data Galeri</h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Label</th>
                                    <th class="text-center">Pemesan</th>
                                    <th class="text-center">Bahan</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_galeri as $galeri)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                               
                                                <a class="btn btn-warning" data-toggle="modal"
                                                    data-target="#modal-edit{{ $galeri->id }}"><span
                                                        class="fa fa-edit"></span></a>
                                                @include('template.utils.delete', [
                                                    'url' => url('admin/galeri', $galeri->id),
                                                ])
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $galeri->label }}</td>
                                        <td class="text-center">{{ $galeri->pemesan }}</td>
                                        <td class="text-center">{{ $galeri->bahan }}</td>
                                        <td class="text-center">{{ $galeri->jumlah }}</td>
                                        <td class="text-center">
                                            <img src="{{ url("public/$galeri->foto") }}" class="img-responsive"
                                                style="width:20%">
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="modal-edit{{ $galeri->id }}">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Galeri</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('admin/galeri', $galeri->id) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method("PUT")
                                                    <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Label</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="label"
                                                                    value="{{ $galeri->label }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Pemesan</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="pemesan"
                                                                    value="{{ $galeri->pemesan }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Bahan</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="bahan"
                                                                    value="{{ $galeri->bahan }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Jumlah</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="jumlah"
                                                                    value="{{ $galeri->jumlah }}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Foto</label>
                                                            <div class="col-md-5">
                                                                <img src="{{ url("public/$galeri->foto") }}"
                                                                    class="img-responsive"
                                                                    style="width:70% ; object-fit: cover">
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <input type="file" class="form-control" name="foto"
                                                                    accept=".jpg, .png, .jpeg">
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
                    <h4 class="modal-title">Tambah Data Galeri</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('admin/galeri') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Label</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="label" placeholder="Label" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Pemesan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pemesan" placeholder="Pemesan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Bahan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="bahan" placeholder="Pemesan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jumlah" placeholder="Pemesan" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg">
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
