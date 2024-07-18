@extends('layouts.layouts')

@section('content')
    <section class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8">

        {{-- Navigasi --}}
        <div class="d-flex">
            <a href="{{route('produk')}}">Produk</a>
            <div class="mx-1"> . </div>
            <a href="">Edit Produk</a>
        </div>   

            <h4 class="fw-bold mb-3">Halaman Edit Produk</h4>

            <form action="{{route('produk.update', $produk->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-4">
                    <label for="">Masukkan ID UMKM</label>
                    <input type="text" class="form-control @error('umkm') is-invalid @enderror" name="umkm" 
                    value="{{old('umkm', $produk->umkm)}}">

                    @error('umkm')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Masukkan Nama Produk</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                    value="{{old('name', $produk->name)}}">

                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Pilih Foto Produk</label>
                    <input type="hidden" name="old_image" value="{{ $produk->image }}">
                    <div>
                        <img src="{{asset('storage/produk/'. $produk->image)}}" class="col-lg-4 img-responsive" width="50%">
                    </div>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
    
                    @error('image')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Masukkan Harga Produk</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" 
                    value="{{old('harga', $produk->harga)}}">

                    @error('harga')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Masukkan Harga Satuan Produk</label>
                    <input type="text" class="form-control @error('harga_satuan') is-invalid @enderror" name="harga_satuan"
                    value="{{old('harga_satuan', $produk->harga_satuan)}}">

                    @error('harga_satuan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="control-label">Deskripsi Produk</label>
                    <textarea name="desc" id="summernote" class="form-control" cols="30" rows="10">
                        {!! $produk->desc !!}
                    </textarea>
    
                    @error('desc')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
@endsection