<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Rayon;
use App\Models\Anggota;
use App\Models\Anngota;
use App\Models\Keluarga;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function data()
    {
        $keluarga = Keluarga::all();
        return view('admin.data-kk', ['keluarga' => $keluarga]);
    }

    public function input()
    {
        $rayon = Rayon::all();
        return view('admin.input-kk', ['rayon' => $rayon]);
    }

    public function create_keluarga(Request $request)
    {
        // dd($request);
        $keluarga = keluarga::create($request->all());
        if ($keluarga) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data keluarga berhasil ditambah!');

        }
        return redirect('/data-kk');
    }

    public function show($id)
    {
        // $keluarga = Keluarga::with('anggotas')->get();
        // // dd($anggota);
        // return view('admin.detail-kk', ['keluarga' => $keluarga]);

        $anggota = Keluarga::with(['anggotas'])->findOrFail($id);
        // dd($keluarga);
        return view('admin.detail-kk', ['anggota' => $anggota]);

        // return view('admin.detail-kk');
    }

    public function input_anggota($id)
    {
        $keluarga = Keluarga::findOrFail($id);
        $pendidikan = Pendidikan::all();
        $pekerjaan = Pekerjaan::all();
        $agama = Agama::all();
        return view('admin.input-anggota', ['keluarga' => $keluarga, 'pendidikan' => $pendidikan, 'pekerjaan' => $pekerjaan, 'agama' => $agama]);
        // dd($keluarga);
    }

    public function create_anggota(Request $request)
    {
        $anggota = Anggota::create($request->all());
        if($anggota) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Anggota berhasil ditambah!');
        }

        return redirect('/detail-kk/'.$anggota->kk_id);
        // dd($request->kk_id);
    }

    public function edit_anggota($id)
    {
        $anggota = Anggota::findOrFail($id);
        $pendidikan = Pendidikan::all();
        $pekerjaan = Pekerjaan::all();
        $agama = Agama::get('id', 'name');
        return view('admin.edit-anggota', ['anggota' => $anggota, 'pendidikan' => $pendidikan, 'pekerjaan' => $pekerjaan, 'agama' => $agama]);
    }
}
