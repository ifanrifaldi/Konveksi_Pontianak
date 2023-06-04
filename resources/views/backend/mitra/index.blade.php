@extends('template.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                    <a href="{{ url('admin/mitra/create') }}" class="btn btn-primary float-right mb-10"> <span
                        class="fa fa-plus"></span> Tambah Data</a>
                    <h3 class="card-title">Data Partner Konveksi</h3>
                </div>

                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">Nama Partner</th>
                                <th class="text-center">Link Medsos</th>
                                <th class="text-center">Logo</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_mitra as $mitra)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                           

                                            <a href="{{ url("admin/mitra/$mitra->id") }}/edit" class="btn btn-warning"><span
                                                class="fa fa-edit"></span> </a>

                                            @include('template.utils.delete', [
                                                'url' => url('admin/mitra', $mitra->id),
                                            ])
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $mitra->nama }}</td>
                                    <td class="text-center">{{ $mitra->kota_mitra }}</td>
                                    <td class="text-center">
                                        <img src="{{ url("public/$mitra->logo") }}" class="img-responsive"
                                            style="width:20% ; object-fit: cover; border-radius: 10px;">
                                    </td>
                                </tr>
                               
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection