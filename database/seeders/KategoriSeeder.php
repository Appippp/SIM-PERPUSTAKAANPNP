<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'nama_kategori'     => 'Buku Ajar',
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),
            ],

            [
                'nama_kategori'     => 'Buku Teks',
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),
            ],
        ];

        Kategori::insert($kategori);
    }
}
