<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    // Fungsi Index
    public function index()
    {
        return view('admin.produk.index', [
            'produks' => Produk::orderBy('id')->get(),
        ]);
    }

    

    // Halaman Create
    public function create()
    {
        return view('admin.produk.create');
    }
    
    // Fungsi store
    public function store(Request $request)
    {
        $rules = [
            'umkm' => 'required',
            'name' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'harga' => 'required',
            'harga_satuan' => 'required',
            'desc' => 'required',
        ];

        $messages = [
            'umkm.required' => 'UMKM wajib diisi!',
            'name.required' => 'Nama Produk wajib diisi!',
            'image.required' => 'Image wajib diisi!',
            'harga' => 'Harga Wajib diisi!',
            'harga_satuan' => 'Harga satuan Wajib diisi!',
            'desc.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

                // Image
                $fileName = time() . '.' . $request->image->extension();
                $request->file('image')->storeAs('public/produk', $fileName);
        
                # produk
                $storage = "storage/content-produk";
                $dom = new \DOMDocument();
        
                # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
                libxml_use_internal_errors(true);
                $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
                # Menghapus buffer kesalahan libxml
                libxml_clear_errors();
        
                # Baca di https://dosenit.com/php/fungsi-libxml-php
                $images = $dom->getElementsByTagName('img');
        
                foreach ($images as $img) {
                    $src = $img->getAttribute('src');
                    if (preg_match('/data:image/', $src)) {
                        preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                        $mimetype = $groups['mime'];
                        $fileNameContent = uniqid();
                        $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                        $filePath = ("$storage/$fileNameContentRand.$mimetype");
                        $image = Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));
                        $new_src = asset($filePath);
                        $img->removeAttribute('src');
                        $img->setAttribute('src', $new_src);
                        $img->setAttribute('class', 'img-responsive');
                    }
                }
        
                Produk::create([
                    'umkm' => $request->umkm,
                    'name' => $request->name,
                    'slug' => Str::slug($request->judul, '-'),
                    'image' => $fileName,
                    'harga' => $request->harga,
                    'harga_satuan' => $request->harga_satuan,
                    'desc' => $dom->saveHTML(),
                ]);
        
                return redirect(route('produk'))->with('success', 'data berhasil di simpan');
    }

    // Halaman Edit
    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('admin.produk.edit', [
            'produk' => $produk
        ]);
        
    }

    // Fungsi update
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'umkm' => 'required',
            'name' => 'required',
            'image' => $fileCheck,
            'harga' => 'required',
            'harga_satuan' => 'required',
            'desc' => 'required',
        ];

        $messages = [
            'umkm.required' => 'UMKM wajib diisi!',
            'name.required' => 'Nama Produk wajib diisi!',
            'image.required' => 'Image wajib diisi!',
            'harga' => 'Harga Wajib diisi!',
            'harga_satuan' => 'Harga satuan Wajib diisi!',
            'desc.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/produk/' . $produk->image)) {
                \File::delete('storage/produk/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/produk', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // produk
        $storage = "storage/content-produk";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1200, 1200)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        $produk->update([
            'umkm' => $request->umkm,
            'name' => $request->name,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'harga' => $request->harga,
            'harga_satuan' => $request->harga_satuan,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('produk'))->with('success', 'data berhasil di update');

    }

    // Fungsi delete
    public function destroy($id)
    {
        $produk = Produk::find($id);
        if (\File::exists('storage/produk/' . $produk->image)) {
            \File::delete('storage/produk/' . $produk->image);
        }

        $produk->delete();

        return redirect(route('produk'))->with('success', 'data berhasil di hapus');
    }

}
