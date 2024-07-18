@extends('layouts.layouts')

@section('content')
    {{-- produk --}}
    <section id="produk" style="margin-top: 100px" class="py-5">
        <div class="container">
            <div class="header-produk text-center">
                <h2 class="fw-blod"> PRODUK </h2>
            </div>


                <div class="row py-5" data-aos="flip-up">
            @foreach ($produks as $produk)
                    <div class="col-lg-4">
                        <div class="card" style="width: 18rem">
                            <div class="card-body">
                                <img src="{{ asset('storage/produk/' . $produk->image) }}" class="img-fluid mb-3"
                                    alt="">
                                <div class="konten-produk"></div>
                                <p class="mb-3 text-secondary">{{ $produk->create_at }}</p>
                                <h4 class="fw-bold mb-3">{{ $produk->name }}</h4>
                                {{-- <a href="/detail_produk/" class="btn btn-outline-danger">Detail</a> --}}
                            </div>
                        </div>
                    </div>


            @endforeach
                </div>


        </div>
    </section>
    {{-- end produk --}}
@endsection
