<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BerandaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'    => $this->id,
            'kategori' => $this->kategori->nama_kategori,
            'prodi' => $this->prodi->nama_prodi,
            'judul' => $this->judul,
            'tahun' => $this->tahun,
            'penulis' => $this->penulis,
            'penerbit'=> $this->penerbit,
            'jumlah' => $this->jumlah,
            'deskripsi' => $this->deskripsi,
            'foto' => $this->getFotoUrl(),
        ];


    }


    protected function getFotoUrl(): ?string
    {
        if ($this->foto) {
            return asset("storage/foto/{$this->foto}");
        }

        return null;
    }
}
