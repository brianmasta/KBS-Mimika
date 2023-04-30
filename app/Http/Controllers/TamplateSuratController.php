<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamplatesurat;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class TamplateSuratController extends Controller
{
    public function data()
    {
        $TamplateSurat = Tamplatesurat::orderBy('judul','asc')->get();
        return view('admin.data-tamplateSurat', ['TamplateSurat' => $TamplateSurat]);
    }

    public function input()
    {
        return view('admin.input-tamplate-surat');
    }

    public function create_tamplate_surat(Request $request)
    {   
        if($request->file('surat')){
            $extension = $request->file('surat')->getClientOriginalExtension();
            $name = now()->timestamp.'.'.$extension;
            $request->file('surat')->storeAs('tamplate_surat', $name);
        }

        $request['file'] = $name;
        $surat = Tamplatesurat::create($request->all());

        if ($surat) {
            Session::flash('status', 'success');
            Session::flash('message', 'Surat Berhasil ditambah!');

        }
        return redirect('/data-tamplate-surat');
    }

    public function delete_tamplate_surat($id)
    {
        $surat = Tamplatesurat::findOrfail($id);

        return view('admin.tamplate-surat-delete', ['surat' => $surat]);
    }

    public function destroy_tamplate_surat($id)
    {
        $surat = Tamplatesurat::findOrfail($id);

        Storage::disk('public')->delete('tamplate_surat/'.$surat->file);
        $surat->delete();

        if($surat) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Surat Berhasil Dihapus!');
        }

        return redirect('/data-tamplate-surat');
    }
}
