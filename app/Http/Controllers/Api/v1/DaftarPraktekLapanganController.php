<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Models\PraktekLapangan;
use App\Http\Controllers\Controller;
use App\Http\Resources\DaftarPraktekLapanganResource;

class DaftarPraktekLapanganController extends Controller
{
    public function index()
    {
        return DaftarPraktekLapanganResource::collection(PraktekLapangan::all());
    }
}
