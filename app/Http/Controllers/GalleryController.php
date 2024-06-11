<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galery = Gallery::all();
        return view('admin.sections.galery.index', [
            'galery' => $galery
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sections.galery.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar'     => 'required|image|mimes:jpeg,jpg,png|max:4048',
            'nama'     => 'required|min:6',
            'umur'   => 'required|numeric',
            'alamat'   => 'required'
        ]);
        $image = $request->file('gambar');
        $image->storeAs('public/galery', $image->hashName());
        Gallery::create([
            'gambar'     => $image->hashName(),
            'nama'     => $request->nama,
            'umur'   => $request->umur,
            'alamat'   => $request->alamat,
        ]);
        return redirect()->route('dashboard-galery.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery =  Gallery::findOrFail($id);
        return view('admin.sections.galery.edit', [
            'gallery' => $gallery
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'gambar'     => 'image|mimes:jpeg,jpg,png|max:4048',
            'nama'     => 'required|min:6',
            'umur'   => 'required|numeric',
            'alamat'   => 'required'
        ]);
        $gallery =  Gallery::findOrFail($id);

        if ($request->hasFile('gambar')) {

            $image = $request->file('gambar');
            $image->storeAs('public/galery', $image->hashName());
            Storage::delete('public/galery/' . $gallery->gambar);
            $gallery->update([
                'gambar'     => $image->hashName(),
                'nama'     => $request->nama,
                'umur'   => $request->umur,
                'alamat'   => $request->alamat,
            ]);
        } else {
            $gallery->update([
                'nama'     => $request->nama,
                'umur'   => $request->umur,
                'alamat'   => $request->alamat,
            ]);
        }
        return redirect()->route('dashboard-galery.index')->with(['success' => 'Data Berhasil diUpdate!']);
    }

    public function destroy($id)
    {
        $galery = Gallery::find($id);
        $galery->delete();
        return redirect()->route('dashboard-galery.index')->with(['success' => 'Data Berhasil di Hapus!']);
    }


    public function trash()
    {
        $gallery = Gallery::onlyTrashed()->get();
        return view('admin.sections.galery.trash', ['galery' => $gallery]);
    }

    public function restore($id)
    {
        $gallery = Gallery::onlyTrashed()->where('id', $id);
        $gallery->restore();
        return redirect()->route('dashboard-galery.index')->with(['success' => 'Data Berhasil di Pulihkan!']);
    }

    public function permanentlydelete($id)
    {
        $guru = Gallery::onlyTrashed()->where('id', $id);
        $guru->forceDelete();

        return redirect()->route('dashboard-galery.index')->with(['success' => 'Data Berhasil di Hapus Permanen!']);
    }
}
