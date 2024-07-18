@extends('layouts.layouts')

@section('content')
            {{-- berita --}}
            <section id="berita" style="margin-top: 100px" class="py-5">
                <div class="container">
                    <div class="header-berita text-center">
                        <h2 class="fw-blod">Berita UMKM</h2>
                    </div>
        
                    <div class="row py-5" data-aos="flip-up">
                        @foreach ($artikels as $item)
                        <div class="col-lg-4">
                            <div class="card border-0 ">
                                <img src="{{ asset('storage/artikel/'. $item->image) }}" class="img-fluid mb-3" alt="">
                                <div class="konten-berita"></div>
                                <p class="mb-3 text-secondary">{{$item->create_at}}</p>
                                <h4 class="fw-bold mb-3">{{$item->judul}}</h4>
                                <p class="text-secondary">#UMKM</p>
                                <a href="/detail/{{$item->slug}}" 
                                    class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
        
                    {{-- <div class="footer-berita text-center">
                        <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
                    </div> --}}
                </div>
            </section>
            {{-- end berita --}}
@endsection