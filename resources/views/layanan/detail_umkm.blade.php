@extends('layouts.layouts')

@section('content')
    <section id="detail_umkm" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8">
            <div class="d-flex mb-3">
                <a href="/">Home</a> 
                {{-- / <a href="/layanan"> UMKM </a> --}}
            </div>
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('storage/umkm/' . $umkm->image) }}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita"></div>
                    <p class="mb-3 text-secondary">{{ $umkm->create_at }}</p>
                    <h4 class="fw-bold mb-3">{{ $umkm->judul }}</h4>
                    <p class="text-secondary">{!! $umkm->desc !!}</p>
                </div>
            </div>

            <div class="row col-xxl-8">
                @foreach ($produks as $produk)
                    <div class="col-lg-3 col-md-6 col-6 text-center">
                        <div class="card" style="width: 18rem;" class="py-3 d-flex mb-3">
                            <div class="card-body">
                                {{-- <a href="/produkk"> --}}
                                <img src="{{ asset('storage/produk/' . $produk->image) }}" class="card-img-top"
                                    style="" alt="">

                                <p class="fw-bold mb-3">{{ $produk->name }}</p>
                                <p>Harga {{ $produk->harga }}</p>
                                {{-- <p>{{ $produk->harga_satuan }}</p>
                            <p>{{ $produk->desc }}</p> --}}
                                {{-- </a> --}}

                            </div>
                        </div>
                    </div>
            </div>
            @endforeach

        </div>
        </div>
    </section>
@endsection
