<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Models\Jadwal_Ibadah;

class HomeController extends Controller
{
    public function index()
    {
        $ibadah = Jadwal_Ibadah::orderBy('date','asc')->get();
        $galeri = Galeri::orderBy('gambar','asc')->get();
        return view('home', ['ibadah' => $ibadah, 'galeri' => $galeri]);
    }
}
