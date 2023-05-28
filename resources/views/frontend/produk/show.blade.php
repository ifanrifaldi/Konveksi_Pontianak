@extends('template.base')
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

<div class="services">
    <div class="container">
        <div class="row">
            @foreach ($list_produk as $produk)
                
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{ url("public/$produk->foto") }}" style="object-fit: cover; position: static; width: 100%; height: 400px;">
                    <div class="down-content">
                        <h4 class="text-center">
                            {{ $produk->nama }}
                        </h4>
                        <div style="margin-bottom:10px;" class="text-justify">
                            <span>
                                {!! nl2br($produk->deskripsi_produk) !!}
                            </span>
                        </div>
                        <!-- <p class="text-center">
                            <i class="fa fa-user" title="passegengers"></i> 5 &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-briefcase" title="luggages"></i> 4 &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-sign-out" title="doors"></i> 4 &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cog" title="transmission"></i> A
                        </p> -->
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">
                            Order Now
                        </a>
                    </div>
                </div>

                <br>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 70px;">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Order Now</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="#" id="contact">
                <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Pick-up location" required="">
                    </fieldset>
                  </div>
                 </div>

                 <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Return location" required="">
                    </fieldset>
                  </div>
                 </div>
                </div>

                <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                    </fieldset>
                  </div>
                 </div>

                 <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Return date/time" required="">
                    </fieldset>
                  </div>
                 </div>
                </div>

                <div class="form-group">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Enter full name" required="">
                  </fieldset>
                </div>

                <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Enter email address" required="">
                    </fieldset>
                  </div>
                 </div>

                 <div class="col-md-6">
                  <div class="form-group">
                    <fieldset>
                      <input type="text" class="form-control" placeholder="Enter phone" required="">
                    </fieldset>
                  </div>
                 </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Book Now</button>
        </div>
      </div>
    </div>
  </div> -->
@endsection
