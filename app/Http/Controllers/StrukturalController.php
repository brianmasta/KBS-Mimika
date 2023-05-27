<?php

namespace App\Http\Controllers;

use App\Models\Struktural;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class StrukturalController extends Controller
{
    public function data()
    {
        $struktural = Struktural::all();
        return view('admin.struktural', ['struktural' => $struktural]);
    }

    public function input()
    {
        return view('admin.input-struktural');
    }

    public function create_struktural(Request $request)
    {   
        if($request->file('picture')){
            $extension = $request->file('picture')->getClientOriginalExtension();
            $name = now()->timestamp.'.'.$extension;
            $request->file('picture')->storeAs('struktural', $name);
        }

        $request['foto'] = $name;
        $struktural = Struktural::create($request->all());

        if ($struktural) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Berhasil ditambah!');

        }
        return redirect('/data-struktural');
    }

    public function edit_struktural($id)
    {
        $struktural = Struktural::findOrFail($id);
        return view('admin.edit-struktural', ['struktural' => $struktural]);
    }

    public function update_struktural(Request $request, $id)
    {
    
        $name = $request->update_picture;

        if($request->file('picture')){
            $extension = $request->file('picture')->getClientOriginalExtension();
            $name = now()->timestamp.'.'.$extension;
            $request->file('picture')->storeAs('struktural', $name);
        }

        $request['foto'] = $name;

        $struktutral = Struktural::findOrfail($id);
        $struktutral->update($request->all());

        if($struktutral) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Galeri Berhasil Update!');
        }

        return redirect('/data-struktural');
    }

    public function delete_struktural($id)
    {
        $struktural = Struktural::findOrfail($id);

        return view('admin.struktural-delete', ['struktural' => $struktural]);
    }

    public function destroy_struktural($id)
    {
        $struktural = Struktural::findOrfail($id);
 
        Storage::disk('public')->delete('struktural/'.$struktural->foto);
        $struktural->delete();

        if($struktural) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Struktutral Berhasil Dihapus!');
        }

        return redirect('/data-struktural');
    }
}
