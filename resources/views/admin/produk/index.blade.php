@extends('layouts.layouts')

@section('content')
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8">

        {{-- Navigasi --}}
        <div class="d-flex">
            <a href="{{route('dashboard')}}">Dashboard</a>
        </div>

            <h4>Halaman Produk</h4>
            <a href="{{ route('produk.create') }}" class="btn btn-primary">Buat Produk</a>

            {{-- Pesan/notifikasi sukses --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Informasi</strong> {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive py-3">
                <table class="table table-bordered"> 
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID UMKM</th>
                            <th>Nama Produk</th>
                            <th>Image</th>
                            <th>Harga</th>
                            {{-- <th>Harga Satuan</th>
                            <th>Deskripsi</th> --}}
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    @php
                        $no = 1;
                    @endphp

                    <tbody>
                        @foreach ($produks as $produk)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    {{ $produk->umkm }}
                                </td>
                                <td>
                                    {{ $produk->name }}
                                </td>
                                <td>
                                    <img src="{{ asset('storage/produk/' . $produk->image) }}" height="100" alt="">
                                </td>
                                <td>
                                    {{ $produk->harga }}
                                </td>
                                {{-- <td>
                                    {{ $produk->harga_satuan }}
                                </td>
                                <td>
                                    {{ $produk->desc }}
                                </td> --}}
                                <td>
                                    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                    <button type="submit" onclick="alert('Apakah yakin akan di hapus?')"
                                        class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                {{-- <h5>Informasi Pengisian ID </h5>
                <h5>ID UMKM mengikuti pada tabel UMKM di halaman UMKM</h5>
                <ul class="nav-flex-column">
                    <li class="nav-item mb-2">
                        <p class="nav-link p-0 text-muted">ketika pengisian ID UMKM pada Produk harus sesuai dengan ID UMKM nya</p>
                    </li>
                    <li class="nav-item mb-2">
                        <p class="nav-link p-0 text-muted">Berikut contoh Gambarnya</p>
                        <img src="{{ asset('assets/images/idumkm.png') }}" class="img-fluid" height="500px" width="500px" alt="">
                    </li>
                </ul> --}}
            </div>
        </div>
    </section>
@endsection
