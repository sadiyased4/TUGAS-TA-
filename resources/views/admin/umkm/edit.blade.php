@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px">
    <div class="container col-xxl-8 py-5">
        {{-- Navigasi --}}
        <div class="d-flex">
            <a href="{{route('umkm')}}">UMKM</a>
            <div class="mx-1"> . </div>
            <a href="">Edit UMKM</a>
        </div>
        <h3 class="fw-bold mb-3">Halaman edit UMKM</h3>

        <form action="{{route('umkm.update', $umkm->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="">Masukkan Judul UMKM</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" 
                value="{{old('judul', $umkm->judul)}}">
    
                @error('judul')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            {{-- <div class="form-group mb-4">
                <label for="">Pilih Logo UMKM</label>
                <input type="hidden" name="old_image" value="{{$umkm->image}}">
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                <div>
                    <img src="{{asset('storage/logo/'. $umkm->image)}}" class="col-lg-4" alt="">
                </div>
    
                @error('image')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div> --}}
    
            <div class="form-group mb-4">
                <label for="">Pilih Foto UMKM</label>
                <input type="hidden" name="old_image" value="{{$umkm->image}}">
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                <div>
                    <img src="{{asset('storage/umkm/'. $umkm->image)}}" class="col-lg-4" width="50%" alt="">
                </div>
    
                @error('image')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
    
            <div class="form-group mb-4">
                <label for="">Deskripsi UMKM</label>
                <textarea name="desc" id="summernote">
                    {!! $umkm->desc !!}
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