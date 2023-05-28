<!-- @extends('template.base')
@section('content')
@section('title')
    {{ $jenis_produk->nama }}
@endsection

@include('layout.menu.menu')
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $jenis_produk->nama }}</h1>
                <span>KONVEKSI PONTIANAK</span>
            </div>
        </div>
    </div>
</div>

<div class="more-info about-info">
    @foreach ($list_produk as $produk)
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="more-info-content">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <div class="right-content">
                                <span>Konveksi Pontianak</span>
                                <h2><em>{{ $jenis_produk->nama }}</em></h2>
                                <span>
                                    {!! nl2br($produk->deskripsi_produk) !!}
                                    <a href="blog-details.html" class="filled-button">Order Sekarang</a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="left-image">
                                <img src="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection -->
