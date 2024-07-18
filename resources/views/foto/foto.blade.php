@extends('layouts.layouts')

@section('content')
      {{-- Mini Gallery --}}
      <section id="foto" class="section-foto parallax py-5" style="margin-top: 100px" data-aos="zoom-in">
        <div class="container">
            {{-- <div class="header-berita text-center">
                <h2 class="fw-blod py-5">Gallery</h2>
            </div> --}}

            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Gallery</h5>
                </div>
                {{-- <div>
                    <a href="/foto" class="btn btn-outline-white ">Foto Lainnya</a>
                </div> --}}
            </div>

            <div class="row">
                @foreach ($photos as $photo)
                <div class="col-lg-3 col-md-6 col-6">
                    <a class="image-link" href="{{ asset('storage/photo/'. $photo->image) }}">
                    <img src="{{ asset('storage/photo/'. $photo->image) }}" class="img-fluid" alt="">
                    </a>
                    <p>{{$photo->judul}}</p>
                </div>
                @endforeach

                @foreach ($produks as $produk)
                <div class="col-lg-3 col-md-6 col-6">
                    {{-- <a class="image-link" href="{{ asset('storage/photo/'. $produk->image) }}"> --}}
                    <img src="{{ asset('storage/produk/'. $produk->image) }}" class="img-fluid" alt="">
                    {{-- </a> --}}
                    <p>{{$produk->name}}</p>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    {{-- end Mini Gallery --}}
@endsection