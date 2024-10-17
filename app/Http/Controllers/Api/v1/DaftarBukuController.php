<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DaftarBukuResource;

class DaftarBukuController extends Controller
{
    public function index()
    {
        return DaftarBukuResource::collection(Buku::all());
    }
}
