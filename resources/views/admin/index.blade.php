@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-xxl-8 py-5">
            <h3 class="fw-bold mb-3">Halaman Dashboard ADMIN</h3>
            {{-- <p>Selamat Datang di halaman Dashboard Admin</p> --}}
            <div class="logout">
                @auth
                    <form action="/logout" method="POST" class="d-flex justify-content-start">
                        @csrf
                        <button type="submit" class="btn btn-dark">Logout</button>
                    </form>
                @endauth
                <div class="row">

                    <div class="col-lg-4 py-3">
                        <div class="card shadow-sm rounded-3 border-0">
                            <img src="{{ asset('assets/images/umkm.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">UMKM</h5>
                                <p class="card-text">Atur dan kelola UMKM</p>
                                <a href="{{route('umkm')}}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 py-3">
                        <div class="card shadow-sm rounded-3 border-0">
                            <img src="{{ asset('assets/images/produk.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Produk</h5>
                                <p class="card-text">Atur dan kelola Produk</p>
                                <a href="{{route('produk')}}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 py-3">
                        <div class="card shadow-sm rounded-3 border-0">
                            <img src="{{ asset('assets/images/berita.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Berita UMKM </h5>
                                <p class="card-text">Atur dan kelola berita </p>
                                <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 py-3">
                        <div class="card shadow-sm rounded-3 border-0">
                            <img src="{{ asset('assets/images/foto.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Foto UMKM</h5>
                                <p class="card-text">Atur dan kelola Foto </p>
                                <a href="{{ route('photo') }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 py-3">
                        <div class="card shadow-sm rounded-3 border-0">
                            <img src="{{ asset('assets/images/tag.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">TAG</h5>
                                <p class="card-text">Atur Tag</p>
                                <a href="{{ route('tag') }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4 py-3">
                        <div class="card shadow-sm rounded-3 border-0">
                            <img src="{{ asset('assets/images/8.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Product</h5>
                                <p class="card-text">Atur dan kelola product UMKM</p>
                                <a href="{{ route('products') }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </section>
@endsection
