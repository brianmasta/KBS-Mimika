<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal_Ibadah;

class HomeController extends Controller
{
    public function index()
    {
        $ibadah = Jadwal_Ibadah::orderBy('date','asc')->get();
        return view('home', ['ibadah' => $ibadah]);
    }
}
