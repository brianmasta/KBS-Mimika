<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Models\Darah;
use App\Models\Rayon;
use App\Models\Anggota;
use App\Models\Anngota;
use App\Models\Kelamin;
use App\Models\Hubungan;
use App\Models\Keluarga;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Perkawinan;
use Illuminate\Http\Request;
use App\Models\Kewarganegaraan;
use Illuminate\Support\Facades\Session;
// use Barryvdh\DomPDF\Facade\Pdf;

class KeluargaController extends Controller
{
    public function data(Request $request)
    {
        $pencarian = $request->pencarian;
        $keluarga = Keluarga::Where('name','LIKE','%'.$pencarian.'%')
                    ->orWhere('alamat','LIKE','%'.$pencarian.'%')
                    ->orWhere('asal_jemaat','LIKE','%'.$pencarian.'%')
                    ->orWhereHas('rayon', function($query) use($pencarian){
                        $query->where('name','LIKE','%'.$pencarian.'%');
                    })
                    ->paginate(15);
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
        $anggota = Keluarga::with(['anggotas'])->findOrFail($id);
        
        return view('admin.detail-kk', ['anggota' => $anggota]);
    }

    // DELETE KELUARGA
    public function delete_keluarga($id)
    {
        $keluarga = Keluarga::findOrfail($id);

        return view('admin.keluarga-delete', ['keluarga' => $keluarga]);
    }

    public function destroy_keluarga($id)
    {
        $keluarga = Keluarga::findOrfail($id);
        $keluarga->delete();

        if($keluarga) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Anggota Berhasil Dihapus!');
        }

        return redirect('/data-kk');
    }


    // INPUT ANGGOTA
    public function input_anggota($id)
    {
        $keluarga = Keluarga::findOrFail($id);
        $pendidikan = Pendidikan::all();
        $pekerjaan = Pekerjaan::all();
        $agama = Agama::all();
        $kelamin = Kelamin::all();
        $hubungan = Hubungan::all();
        $kewarganegaraan = Kewarganegaraan::all();
        $perkawinan = Perkawinan::all();
        $darah = Darah::all();
        return view('admin.input-anggota', [
            'keluarga' => $keluarga, 
            'pendidikan' => $pendidikan, 
            'pekerjaan' => $pekerjaan, 
            'agama' => $agama,
            'kelamin' => $kelamin,
            'hubungan' => $hubungan,
            'kewarganegaraan' => $kewarganegaraan,
            'perkawinan' => $perkawinan,
            'darah' => $darah
        
        ]);
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
        $kelamin = Kelamin::where('id', '!=', $anggota->kelamin_id)->get(['id', 'name']);
        $pendidikan = Pendidikan::where('id', '!=', $anggota->pendidikan_id)->get(['id', 'name']);
        $pekerjaan = Pekerjaan::where('id', '!=', $anggota->pekerjaan_id)->get(['id', 'name']);
        $agama = Agama::where('id', '!=', $anggota->agama_id)->get(['id', 'name']);
        $darah = Darah::where('id', '!=', $anggota->darah_id)->get(['id', 'name']);
        $hubungan = Hubungan::where('id', '!=', $anggota->hubungan_id)->get(['id', 'name']);
        $perkawinan = Perkawinan::where('id', '!=', $anggota->perkawinan_id)->get(['id', 'name']);
        $kewarganegaraan = Kewarganegaraan::where('id', '!=', $anggota->kewarganegaraan_id)->get(['id', 'name']);
        return view('admin.edit-anggota', [
            'anggota' => $anggota, 
            'pendidikan' => $pendidikan, 
            'pekerjaan' => $pekerjaan, 
            'agama' => $agama, 
            'darah' => $darah, 
            'hubungan' => $hubungan,
            'perkawinan' => $perkawinan,
            'kewarganegaraan' => $kewarganegaraan,
            'kelamin' => $kelamin
        ]);
    }

    public function update_anggota(Request $request, $id)
    {
        $anggota = Anggota::findOrfail($id);
        
        $anggota->update($request->all());

        if($anggota) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Anggota Berhasil Update!');
        }

        return redirect('/detail-kk/'.$anggota->kk_id);
    }

    public function edit_kk($id)
    {
        $keluarga = Keluarga::with(['rayon'])->findOrFail($id);
        $rayon = Rayon::where('id', '!=', $keluarga->rayon_id)->get(['id', 'name']);

        return view('admin.edit-kk', ['keluarga' => $keluarga, 'rayon' => $rayon]);
    }

    public function update_keluarga(Request $request, $id)
    {
        $keluarga = Keluarga::findOrfail($id);

        $keluarga->update($request->all());

        if($keluarga) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Keluarga Berhasil Update!');
        }

        return redirect('/data-kk');
    }

    public function delete_anggota($id)
    {
        $anggota = Anggota::findOrfail($id);

        return view('admin.anggota-delete', ['anggota' => $anggota]);
    }

    public function destroy_anggota($id)
    {
        $anggota = Anggota::findOrfail($id);
        $anggota->delete();

        if($anggota) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Anggota Berhasil Dihapus!');
        }

        return redirect('detail-kk/'. $anggota->kk_id);
    }

    public function cetak_data_kk()
    {
        $keluarga = Keluarga::all();

        // $pdf = pdf::loadView('admin.cetak-kk-pdf', ['keluarga' => $keluarga]);
        // return $pdf->stream('Data_Keluarga_KBS.pdf');

        return View('admin.cetak-kk-pdf', ['keluarga' => $keluarga]);
    }
}
