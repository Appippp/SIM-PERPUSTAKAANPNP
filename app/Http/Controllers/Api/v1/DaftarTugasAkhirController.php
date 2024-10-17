<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\TugasAkhir;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DaftarTugasAkhirResource;

class DaftarTugasAkhirController extends Controller
{
    public function index()
    {
        return DaftarTugasAkhirResource::collection(TugasAkhir::all());
    }
}
