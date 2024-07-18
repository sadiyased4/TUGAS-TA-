@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px">
    <div class="container col-xxl-8 py-5">

    {{-- Navigasi --}}
    <div class="d-flex">
        <a href="{{route('tag')}}">Tag</a>
        <div class="mx-1"> . </div>
        <a href="">Edit Tag</a>
    </div>   

        <h3 class="fw-bold mb-3">Halaman Edit Tag</h3>
        
        <form action="{{route('tag.update', $tag->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group mb-4">
                    <label for="">Masukkan Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" 
                    value="{{old('judul', $tag->judul)}}">
    
                    @error('judul')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
    
                <div class="form-group mb-4">
                    <label for="">Masukkan URL</label>
                    <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" 
                    value="{{old('url', $tag->url)}}">
    
                    @error('url')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
    
                <button type="submit" class="btn btn-primary">Update</button>
            </form>        

    </div>
</section>
@endsection