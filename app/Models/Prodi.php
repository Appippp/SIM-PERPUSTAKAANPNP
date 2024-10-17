<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Prodi extends Model
{
    // use HasFactory;

    use softDeletes;

    protected $table = 'prodi';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_prodi',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function buku()
    {
        return $this->hasMany('App\Models\Buku', 'prodi_id');
    }

    public function tugas_akhir()
    {
        return $this->hasMany('App\Models\TugasAkhir', 'prodi_id');
    }

    public function praktek_lapangan()
    {
        return $this->hasMany('App\Models\PraktekLapangan', 'prodi_id');
    }
}
