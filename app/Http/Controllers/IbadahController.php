<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal_Ibadah;
use Illuminate\Support\Facades\Session;

class IbadahController extends Controller
{
    public function data()
    {
        $ibadah = Jadwal_Ibadah::orderBy('date','asc')->get();
        return view('admin.data-ibadah', ['ibadah' => $ibadah]);
    }

    public function input()
    {
        return view('admin.input-ibadah');
    }

    public function create_ibadah(Request $request)
    {
        // dd($request);
        $ibadah = Jadwal_Ibadah::create($request->all());
        if ($ibadah) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Ibadah Berhasil ditambah!');

        }
        return redirect('/data-ibadah');
    }

    public function edit_ibadah($id)
    {
        $ibadah = Jadwal_Ibadah::findOrFail($id);
        return view('admin.edit-ibadah', ['ibadah' => $ibadah]);
    }

    public function update_ibadah(Request $request, $id)
    {
        $ibadah = Jadwal_Ibadah::findOrfail($id);
        
        $ibadah->update($request->all());

        if($ibadah) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Ibadah Berhasil Update!');
        }

        return redirect('/data-ibadah');
    }

    public function delete_ibadah($id)
    {
        $ibadah = Jadwal_Ibadah::findOrfail($id);

        return view('admin.ibadah-delete', ['ibadah' => $ibadah]);
    }

    public function destroy_ibadah($id)
    {
        $ibadah = Jadwal_Ibadah::findOrfail($id);
        $ibadah->delete();

        if($ibadah) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data Ibadah Berhasil Dihapus!');
        }

        return redirect('/data-ibadah');
    }
}
