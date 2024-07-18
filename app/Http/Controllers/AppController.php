<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Photo;
use App\Models\Produk;
use App\Models\Umkm;
use App\Models\Tag;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('index', [
            'artikels' => Blog::orderBy('id', 'desc')->limit(3)->get(),
            'photos' => Photo::orderBy('id','desc')->limit(8)->get(),
            'umkms' => Umkm::orderBy('id')->get(),
            'produks' => Produk::orderBy('id')->get(),
            'tags' => Tag::orderBy('id')->get(),
        ]);

    }

    public function berita()
    {
        return view('berita.berita',[
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($slug)
    {
        $artikel = Blog::where('slug', $slug)->first();
        return view('berita.detail',[
            'artikel' => $artikel
        ]);
    }

    public function foto()
    {
        $produk = Produk::orderBy('id', 'desc')->get();
        return view('foto.foto',[
            'photos' => Photo::orderBy('id', 'desc')->get(),
            'produks' => $produk               
        ]);
    }

    public function detail_foto()
    {
        $photo = Photo::where()->first();
        return view('foto.detail',[
            'photo' => $photo,
 
        ]);
    }


    public function layanan()
    {
        return view('layanan.layanan',[
            'umkms' => Umkm::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail_umkm($id)
    {
        $umkm = Umkm::where('id', $id)->first();
       // dd($umkm);
        $produk = Produk::where('umkm', $id)->get();
        
        return view('layanan.detail_umkm',[
            'umkm' => $umkm , 
            'produks' => $produk     
        ]);
    }
    

    public function produkk()
    {
        return view('produkk.produkk',[
            'produks' => Produk::orderBy('id', 'desc')->get()
        ]);
    }

    public function detail_produk()
    {
        $produk = Produk::where('name')->first();
        return view('produkk.detail_produk',[
            // 'produks' => Produk::orderBy('id', 'desc')->get(),
            'produk' => $produk
        ]);
    }


    // public function detail_produk()
    // {
    //     return view('productt.productt',[
    //         'products' => Product::orderBy('id', 'desc')->get()
    //     ]);
    // }




    


    // public function productt()
    // {
    //     return view('productt.productt',[
    //         'products' => Product::orderBy('id', 'desc')->get()
    //     ]);
    // }

    // public function detail_productt()
    // {
    //     $product = Product::where('id')->first();
    //     return view('productt.detail_productt',[
    //         'product' => $product
    //     ]);
    // }

    // public function show($id) {
    //     $produk = Produk::find($id);
    
    //     if ($produk === null) {
    //         // Produk::warning("Produk dengan ID $id tidak ditemukan.");
    //         Produk::orderBy('id')->get();
    //     }
    
    //     return view('produkk.detail', compact('produkk'));
    // }
    


    // public function layanan()
    // {
    //     return view('layanan.detail_umkm',[
    //         'produks' => Produk::orderBy('id', 'desc')->get()
    //     ]);
    // }

    // public function detail_umkm($slug)
    // {
    //     $produk = Produk::where('slug', $slug)->first();
    //     return view('layanan.detail_umkm',[
    //         'produks' => Produk::orderBy('id', 'desc')->get(),
    //         'umkms' => $produk
    //     ]);
    // }

    // public function layanan()
    // {
    //     return view('layanan.detail_umkm',[
    //         'umkms' => Umkm::orderBy('id')->get()
    //     ]);
    // }

    // public function detail_umkm($slug)
    // {
    //     $umkm = Umkm::where('slug', $slug)->first();
    //     return view('layanan.detail_umkm',[
    //         // 'umkms' => Umkm::orderBy('id', 'desc')->get(),
    //         'umkms' => $umkm
    //     ]);
    // }
}
