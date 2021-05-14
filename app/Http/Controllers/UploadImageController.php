<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function index()
    {
        return view('imagens');
    }

    if ($request->hasFile('file')) {
        $request->validate([
            'imagem' => 'mimes:jpeg,bmp,png'
        ]);

        $request->file('imagens')->store('imagens', 'public');
        $path = $request->file('image')->store('public/imagens');
    }

    public function save(Request $request)
    {

        $validatedData = $request->validate([
         'imagens' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $name = $request->file('imagens')->getClientOriginalName();

        $path = $request->file('imagens')->store('public/images');


        $save = new Photo;

        $save->name = $name;
        $save->path = $path;

        $save->save();

        return redirect('upload-imagens')->with('status', 'Image Has been uploaded');

    }
}
