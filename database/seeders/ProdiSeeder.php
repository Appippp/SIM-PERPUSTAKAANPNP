<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodi = [
            [
                'nama_prodi'        => 'Management Informatika',
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),

            ],

            [
                'nama_prodi'        => 'Teknik Listrik',
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),

            ],
        ];

        Prodi::insert($prodi);
    }
}
