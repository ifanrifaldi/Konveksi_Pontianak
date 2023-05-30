@extends('template.base')
@section('title', 'Galery')
@section('content')

@include('layout.menu.menu')
 <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>GALERY HASIL PRODUKSI</h1>
            <span>KONVEKSI PONTIANAK</span>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
        @foreach ($list_galeri as $galeri)
          <div class="col-md-4">
            <div class="service-item">
              <img src="{{ url("public/$galeri->foto") }}" style="object-fit: cover; position: static; width: 100%; height: 400px;">
              <div class="down-content">
                <h4>{{ $galeri->label }}</h4>
                <div style="margin-bottom:10px;">
                  <h6><b>Pemesan :</b> {{ $galeri->pemesan }}</h6>
                  <h6><b>Bahan :</b> {{ $galeri->bahan }}</h6>
                  <h6><b>Jumlah :</b> {{ $galeri->jumlah }} Pcs</h6>
                </div>
                <!-- <p>Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.</p> -->
                <a href="{{url ('public/template')}}/assets/images/produk/kemeja2.jpeg"  data-toggle="show" data-target="#exampleModal"  class="filled-button">Lihat</a>
                
              </div>
              
            </div>

            <br>
          </div>
        @endforeach
        </div>

        <br>
        <br>

        <nav>
          <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>
@endsection