<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function data()
    {
        $galeri = Galeri::orderBy('gambar','asc')->get();
        return view('admin.galeri', ['galeri' => $galeri]);
    }

    public function input()
    {
        return view('admin.input-galeri');
    }

    public function create_galeri(Request $request)
    {   
        // dd($request->all());
        if($request->file('foto')){
            $extension = $request->file('foto')->getClientOriginalExtension();
            $name = now()->timestamp.'.'.$extension;
            $request->file('foto')->storeAs('galeri', $name);
        }

        // dd($name);

        $request['gambar'] = $name;
        $galeri = Galeri::create($request->all());

        if ($galeri) {
            Session::flash('status', 'success');
            Session::flash('message', 'Foto Berhasil ditambah!');

        }
        return redirect('/data-galeri');
    }

    public function edit_galeri($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.edit-galeri', ['galeri' => $galeri]);
    }

    public function update_galeri(Request $request, $id)
    {
    
        $name = $request->update_gambar;

        if($request->file('foto')){
            $extension = $request->file('foto')->getClientOriginalExtension();
            $name = now()->timestamp.'.'.$extension;
            $request->file('foto')->storeAs('galeri', $name);
        }

        $request['gambar'] = $name;

        $galeri = Galeri::findOrfail($id);
        $galeri->update($request->all());

        if($galeri) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Galeri Berhasil Update!');
        }

        return redirect('/data-galeri');
    }

    public function delete_galeri($id)
    {
        $galeri = Galeri::findOrfail($id);

        return view('admin.galeri-delete', ['galeri' => $galeri]);
    }

    public function destroy_galeri($id)
    {
        $galeri = Galeri::findOrfail($id);
        // dd($galeri->gambar);

        // Storage::delete($galeri->gambar);
        Storage::disk('public')->delete('galeri/'.$galeri->gambar);
        $galeri->delete();

        if($galeri) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Galer Berhasil Dihapus!');
        }

        return redirect('/data-galeri');
    }

}
