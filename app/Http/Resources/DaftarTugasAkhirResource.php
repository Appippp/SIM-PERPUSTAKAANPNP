<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DaftarTugasAkhirResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'prodi' => $this->prodi->nama_prodi,
            'judul' => $this->judul,
            'tahun' => $this->tahun,
            'penulis' => $this->penulis,
            'dokumen' => $this->getDokumenUrl(),
        ];
    }


    protected function getDokumenUrl(): ?string
    {
        if ($this->dokumen) {
            return asset("storage/tugas-akhir/{$this->dokumen}");
        }
        return null;
    }
}
