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
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Perkawinan;
use Illuminate\Http\Request;
use App\Models\Kewarganegaraan;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        $total_rayon = Keluarga::count();
        $total_rayon1 = Keluarga::Where('rayon_id', '1')->count();
        $total_rayon2 = Keluarga::Where('rayon_id', '2')->count();
        $total_rayon3 = Keluarga::Where('rayon_id', '3')->count();
        $total_rayon4 = Keluarga::Where('rayon_id', '4')->count();
        $total_rayon5 = Keluarga::Where('rayon_id', '5')->count();
        return view('admin.admin',[
            'total_rayon' => $total_rayon,
            'total_rayon1' => $total_rayon1,
            'total_rayon2' => $total_rayon2,
            'total_rayon3' => $total_rayon3,
            'total_rayon4' => $total_rayon4,
            'total_rayon5' => $total_rayon5
        ]);
    }
}
