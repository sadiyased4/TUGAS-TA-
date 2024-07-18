@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-xxl-8 py-5">

            {{-- Navigasi --}}
            <div class="d-flex">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </div>

            <h3 class="fw-bold mb-3">Halaman Tag</h3>
            {{-- <p>Atur dan Kelola Artikel UMKM Niww Creative</p> --}}

            <a href="{{route('tag.create')}}" class="btn btn-primary">Buat Tag</a>

            {{-- Pesan/notifikasi sukses --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Informasi</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive py-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>URL</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $no = 1;
                        @endphp

                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $no++ }}</td>

                                <td>
                                    {{ $tag->judul }}
                                </td>
                                <td>
                                    {{ $tag->url }}
                                </td>
                                <td>
                                    <a href="{{route('tag.edit', $tag->id)}}" class="btn btn-warning">Edit</a>
                                    <form action="{{route('tag.destroy', $tag->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" onclick="alert('Apakah yakin akan di hapus?')"
                                         class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection
