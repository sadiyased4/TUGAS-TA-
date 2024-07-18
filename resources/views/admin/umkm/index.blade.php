@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-xxl-8 py-5">

            {{-- Navigasi --}}
            <div class="d-flex">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </div>

            <h4 class="fw-bold mb-3">Halaman UMKM</h4>
            {{-- <p>Atur dan Kelola  UMKM Niww Creative</p> --}}
            <a href="{{ route('umkm.create') }}" class="btn btn-primary">Buat umkm</a>

            {{-- Pesan/notifikasi sukses --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Informasi</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive py-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Judul</th>
                            <th>Aksi</th>
                            <th>ID UMKM</th>                            
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $no = 1;
                        @endphp

                        @foreach ($umkms as $umkm)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>
                                    <img src="{{ asset('storage/umkm/' . $umkm->image) }}" height="100" alt="">
                                </td>
                                <td>
                                    {{ $umkm->judul }}
                                </td>
                                <td>
                                    <a href="{{ route('umkm.edit', $umkm->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('umkm.destroy', $umkm->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" onclick="alert('Apakah yakin akan di hapus?')"
                                            class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                                <td>
                                    {{ $umkm->id }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <div class="d-flex">
            <a href="{{route('dashboard')}}">Home</a>
            <div class="mx-1">/</div>
            <a href="{{route('dashboard')}}">Blog Artikel</a>
        </div> --}}

        </div>
    </section>
@endsection
