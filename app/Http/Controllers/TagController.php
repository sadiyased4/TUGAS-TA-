<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function index()
    {
        return view('admin.tag.index',[
            'tags' =>Tag::orderBy('id')->get()
        ]);
        
    }

    //Halaman Create
    public function create()
    {
        return view('admin.tag.create');
    }
    
    //store
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'url' => 'required',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'url.required' => 'url wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        Tag::create([
            'judul' => $request->judul,
            'url' => $request->url,

        ]);

        return redirect(route('tag'))->with('success', 'data  berhasil di simpan');

        
    }

        //Halaman edit
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tag.edit', [
            'tag' => $tag
        ]);
    }

    //Halaman update
    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);

        $rules = [
            'judul' => 'required',
            'url' => 'required',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'url.required' => 'url wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $tag->update([
            'judul' => $request->judul,
            'url' => $request->url,
        ]);

        return redirect(route('tag'))->with('success', 'data berhasil di update');   
    }



    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        return redirect(route('tag'))->with('success', 'data berhasil di hapus');
    }
}
