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

            <h4>Halaman Buat Produk</h4>

            <form action="{{route('produk.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-4">
                    <label for="">Masukkan ID UMKM</label>
                    <input type="text" class="form-control @error('umkm') is-invalid @enderror" name="umkm" 
                    value="{{old('umkm')}}">

                    @error('umkm')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                {{-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Pilih ID UMKM
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="">1</a></li>
                    </ul>
                    @error('umkm')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                  </div> --}}
{{-- 
                  <div class="form-group mb-4">
                    <label for="">Masukkan ID Produk</label>
                    <form action="" method="POST" name="id">
                    <select name="id" id="umkm">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>                        
                    </select>                        
                    </form>
                    @error('umkm')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                  </div> --}}

                <div class="form-group mb-4">
                    <label for="">Masukkan Nama Produk</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                    value="{{old('name')}}">

                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Pilih Foto Produk</label>
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
                    value="{{old('harga')}}">

                    @error('harga')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Masukkan Harga Satuan Produk</label>
                    <input type="text" class="form-control @error('harga_satuan') is-invalid @enderror" name="harga_satuan" 
                    value="{{old('harga_satuan')}}">

                    @error('harga_satuan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="" class="control-label">Deskripsi Produk</label>
                    <textarea name="desc" id="summernote" class="form-control" cols="30" rows="10">
                        {{old('desc')}}
                    </textarea>
    
                    @error('desc')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
    
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
            <br>
        <h4>Pastikan ID UMKM Di ingat !!</h4> 
            </div>
           
        </div>


    </section>
@endsection