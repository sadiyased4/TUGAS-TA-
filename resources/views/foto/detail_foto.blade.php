@extends('layouts.layouts')

@section('content')
<section id="detail_foto" style="margin-top: 100px" class="py-5">
    <div class="container col-xxl-8">
        <div class="d-flex mb-3">
            {{-- <a href="/">Home</a> / <a href="/berita"> Berita</a> --}}
        </div>
        <img src="{{ asset('storage/photo/'. $photo->image) }}" class="img-fluid mb-3" alt="">
        <div class="konten-photo"></div>
        <p class="mb-3 text-secondary">{{$photo->create_at}}</p>
        <h4 class="fw-bold mb-3">{{$photo->judul}}</h4>
        {{-- <p class="text-secondary">{!! $artikel->desc !!}</p> --}}

    </div>
    </div>
</section>
@endsection