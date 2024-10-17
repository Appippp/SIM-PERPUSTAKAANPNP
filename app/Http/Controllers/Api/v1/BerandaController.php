<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BerandaResource;

class BerandaController extends Controller
{

    public function bukuajar()
    {
        $categoryId = Kategori::where('nama_kategori', 'Buku Ajar')->value('id');

        // Temukan buku dengan kategori ID yang telah ditemukan
        $books = Buku::where('kategori_id', $categoryId)->get();

        // Menggunakan resource untuk mengubah format data buku
        return BerandaResource::collection($books);
    }


    public function bukuteks()
    {
        $categoryId = Kategori::where('nama_kategori', 'Buku Teks')->value('id');

        // Temukan buku dengan kategori ID yang telah ditemukan
        $books = Buku::where('kategori_id', $categoryId)->get();

        // Menggunakan resource untuk mengubah format data buku
        return BerandaResource::collection($books);
    }
}
