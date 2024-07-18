{{-- @extends('layouts.layouts')

@section('content')
    <section id="detail_produk" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8">
            <div class="d-flex mb-3">
                <a href="/">Home</a>  / <a href="/layanan"> UMKM</a>
            </div>
            <div class="card">
                <div class="card-body">
                        <h4 class="fw-bold mb-3">{{ $produk->name }}</h4>   
                        <img src="{{ asset('storage/produk/' . $produk->image) }}" class="img-fluid mb-3" width="100px" alt="">
                        <div class="konten-produk"></div>
       
                        <p class="mb-3 text-secondary">{{ $produk->create_at }}</p>
                        <p class="text-secondary">{{ $produk->harga }}</p>
                        <p class="text-secondary">{{ $produk->harga_satuan }}</p>
                        <p class="text-secondary">{!! $produk->desc !!}</p>
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection --}}


@extends('layouts.layouts')

@section('content')
    <section id="detail_produk" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8">
            <div class="d-flex mb-3">
                <a href="/">Home</a> / <a href="/layanan"> UMKM</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('storage/produk/'. $produk->image) }}" class="img-fluid mb-3" alt="">
                    <div class="konten-produk"></div>
                    <p class="mb-3 text-secondary">{{ $produk->create_at }}</p>
                    <h4 class="fw-bold mb-3">{{ $produk->name }}</h4>
                    <p class="text-secondary">{!! $produk->desc !!}</p>
                </div>
            </div>
        </div>

        </div>
    </section>

@endsection


