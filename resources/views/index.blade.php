@extends('layouts.layouts')

@section('content')
    {{-- Hero --}}
    <section id="hero" class="px-0">
        <div class="container text-center text-white">
            <div class="hero-title" data-aos="fade-up">
                <div class="hero-text">Selamat Datang <br> Di UMKM Niww Creative</div>
                <h4>Produk-Produk Lokal dan Jasa Berkualitas</h4>
            </div>

        </div>
    </section>
    {{-- end Hero --}}

    {{-- Layanan --}}
    <section id="Layanan" style="margin-top: -30px">
        <div class="container col-xxl-9">
            {{-- <div class="row"> --}}
            {{-- <div>
                        @foreach ($umkms as $umkm)
                        <div class="col-lg-3 col-md-6 col" data-aos="zoom-in">
                            <div class="bg-white rounded-3 p-3 shadow mb-2 d-flex justify-content-between align-items-center">
                                <div>
                                    <p>UMKM <br>{{$umkm->judul}}</p>
                                </div>
                                <img src="{{ asset('storage/umkm/' . $umkm->image) }}" height="50" width="50">
                            </div>
                        </div>
                        @endforeach
                    </div> --}}
            {{-- 
                    <div>
                        @foreach ($umkms as $umkm) --}}
            {{-- <div class="col-lg-3 col-md-6 col" data-aos="zoom-in">
                            <div class="bg-white rounded-3 p-3 shadow mb-2 d-flex justify-content-between align-items-center">
                                <div>
                                    <p>UMKM <br>{{$umkm->judul}}</p>
                                </div>
                                <img src="{{ asset('storage/umkm/' . $umkm->image) }}" height="50" width="50">
                            </div>
                        </div> --}}
            {{-- <div class="col-md-3 mb-4 d-flex">
                            <div class="card h-100">
                                <img src="{{ asset('storage/umkm/' . $umkm->image) }}" class="card-img-top" alt="Image" style="height: 150px; object-fit: cover;">
                                <div class="card-body">
                                    <div>
                                        <p>UMKM <br>{{$umkm->judul}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> --}}

            <div class="row">
                @foreach ($umkms as $umkm)
                    <div class="col-lg-3 col-md-6 col-6 text-center">
                        <div class="card">
                            <div class="card-body">
                                <a href="/detail_umkm/{{ $umkm->id }}">
                                    <img src="{{ asset('storage/umkm/' . $umkm->image) }}" class="card-img-top"
                                        style="" alt="">
                                    <p>{{ $umkm->judul }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="footer-berita text-center py-3">
                    <a href="/layanan" class="btn btn-outline-danger">Selengkapnya</a>
                </div> --}}
            </div>


            {{-- <div class="col-lg-3 col-md-6 col" data-aos="zoom-in">
                        <div class="bg-white rounded-3 p-3 shadow mb-2 d-flex justify-content-between align-items-center">
                            <div>
                                <p>UMKM <br> Pasang Wifi</p>
                            </div>
                            <img src="{{ asset('assets/icons/wifi.png') }}" height="50" width="50">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col" data-aos="zoom-in">
                        <div class="bg-white rounded-3 p-3 shadow mb-2 d-flex justify-content-between align-items-center">
                            <div>
                                <p>UMKM <br> Telur Bebek</p>
                            </div>
                            <img src="{{ asset('assets/icons/eggs.png') }}" height="50" width="50">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col" data-aos="zoom-in">
                        <div class="bg-white rounded-3 p-3 shadow mb-2 d-flex justify-content-between align-items-center">
                            <div>
                                <p>UMKM <br> Pernak-Pernik</p>
                            </div>
                            <img src="{{ asset('assets/icons/bracelet.png') }}" height="50" width="50">
                        </div>
                    </div> --}}

            {{-- <div class="footer-layanan text-center py-3">
                        <a href="" class="btn btn-outline-danger">UMKM Lainnya</a>
                    </div> --}}

            {{-- </div> --}}
        </div>
    </section>
    {{-- end Layanan --}}


    {{-- berita --}}
    <section id="berita" class="py-5">
        <div class="container">
            <div class="header-berita text-center">
                <h2 class="fw-blod">Berita UMKM</h2>
            </div>

            <div class="row py-5" data-aos="flip-up">
                @foreach ($artikels as $item)
                    <div class="col-lg-4">
                        <div class="card border-0 ">
                            <img src="{{ asset('storage/artikel/' . $item->image) }}" class="img-fluid mb-3" alt="">
                            <div class="konten-berita"></div>
                            <p class="mb-3 text-secondary">{{ $item->create_at }}</p>
                            <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                            <p class="text-secondary">#UMKM</p>
                            <a href="/detail/{{ $item->slug }}" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="footer-berita text-center">
                <a href="/berita" class="btn btn-outline-danger">Berita Lainnya</a>
            </div>
        </div>
    </section>
    {{-- end berita --}}

    {{-- Join --}}
    <section id="join" class="py-5" data-aos="flip-down">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stripe me-2"></div>
                        <h5>UMKM Niww Creative</h5>
                    </div>
                    <h1 class="fw-bold mb-2">Cerita Kami</h1>
                    <p class="mb-3">Dimulai dari tahun 1998, Ibu Winn adalah seorang penjahit yang memulai kariernya dengan jahitan baju-baju sederhana.
                         Setiap hari, dia menjahit dengan penuh dedikasi, melayani pelanggan dari berbagai kalangan. 
                         Dari tangannya yang terampil, lahirlah pakaian-pakaian yang menambah kepercayaan diri para pelanggannya. 
                         Usahanya tidak hanya memenuhi kebutuhan keluarga,
                         tetapi juga memberikan kebahagiaan bagi mereka yang memakainya.
                    </p>
                    <a href="/tentang" class="btn btn-outline-danger">Selengkapnya</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/Niww.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- end Join --}}

    {{-- Mini Gallery --}}
    <section id="foto" class="section-foto parallax" data-aos="zoom-in">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-black fs-2">Mini Gallery</h5>
                </div>
                <div>
                    <a href="/foto" class="btn btn-outline-danger ">Foto Lainnya</a>
                </div>
            </div>

            <div class="row">
                @foreach ($photos as $photo)
                    <div class="col-lg-3 col-md-6 col-6">
                        <a class="image-link" href="{{ asset('storage/photo/' . $photo->image) }}">
                            <img src="{{ asset('storage/photo/' . $photo->image) }}" class="img-fluid" alt="">
                        </a>
                        <p>{{ $photo->judul }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    {{-- end Mini Gallery --}}

    {{-- <--Pengelola--> --}}
    <section id="pengelola" class="py-5" data-aos="flip-up">
        <div class="container py-5">
            <div class="album py-5 bg-body-tertiary ">
                <div class="header-berita text-center">
                    <h2 class="fw-blod" id="pengelola">Pengelola</h2>
                </div>
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 row-cols-lg-4 py-5">

                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ asset('assets/images/winn.png') }}" class="d-block w-100 h-200" alt="...">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <p class="card-text text-center fw-bold ">Sri Winarti</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ asset('assets/images/ekoo.png') }}" class="d-block w-100" alt="...">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <p class="card-text text-center fw-bold">Eko W</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="card shadow-sm">
                                    <img src="{{ asset('assets/images/ivan.png') }}" class="d-block w-100"
                                        alt="...">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <p class="card-text text-center fw-bold">Ivan W</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="card shadow-sm">
                                    <img src="{{ asset('assets/images/aiss.png') }}" class="d-block w-100" alt="...">
                                    <div class="card shadow-sm">
                                        <div class="card-body">
                                            <p class="card-text text-center fw-bold">Aisyatulaili W</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <--end Pengelola--> --}}

    {{-- tag --}}
    <section id="tag" class="py-5">
        <div class="container">
            <div class="header-tag text-center">
                <h2 class="fw-blod">Tag</h2>
            </div>

            <div class="row py-5" data-aos="flip-up">
                @foreach ($tags as $tag)
                    <div class="col-lg-3">
                        <div class="card border-0 ">
                            <div class="konten-tag"></div>
                            {{-- <h4 class="fw-normal mb-4 fs-5">{{ $tag->judul }}</h4> --}}
                            <h5><a class="fw-normal text-muted" href="{{$tag->url}}">{{$tag->judul}}</a></h5>
                            {{-- <h4 class="fw-normal mb-3 fs-5"><a href="{{ $tag->url }}">{{ $tag->url }}</a></h4> --}}
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- end tag --}}

@endsection
