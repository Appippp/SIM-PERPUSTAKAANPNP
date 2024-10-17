<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Prodi;
use App\Models\TugasAkhir;
use Illuminate\Http\Request;
use App\Models\PraktekLapangan;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahbuku = Buku::count();
        $jumlahta   = TugasAkhir::count();
        $jumlahpkl  = PraktekLapangan::count();
        $jumlahprodi= Prodi::count();

        return view('pages.dashboard.index', compact('jumlahbuku','jumlahta','jumlahpkl','jumlahprodi'));
    }
}
