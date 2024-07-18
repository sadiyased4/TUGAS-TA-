@extends('layouts.layouts')

@section('content')
            {{-- umkm --}}
            <section id="umkm" style="margin-top: 100px" class="py-5">
                <div class="container">
                    <div class="header-umkm text-center">
                        <h2 class="fw-blod"> UMKM </h2>
                    </div>
        
                    <div class="row py-5" data-aos="flip-up">
                        @foreach ($umkms as $umkm)
                        <div class="col-lg-4">
                            <div class="card border-0 ">
                                <img src="{{ asset('storage/umkm/'. $umkm->image) }}" class="img-fluid mb-3" alt="">
                                <div class="konten-umkm"></div>
                                <p class="mb-3 text-secondary">{{$umkm->create_at}}</p>
                                <h4 class="fw-bold mb-3">{{$umkm->judul}}</h4>
                                <a href="/detail_umkm/{{$umkm->slug}}" 
                                    class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </section>
            {{-- end umkm --}}
@endsection