<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class TugasAkhir extends Model
{
    // use HasFactory;
    use softDeletes;

    protected $table = 'tugas_akhir';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'prodi_id',
        'judul',
        'tahun',
        'penulis',
        'dokumen',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi', 'prodi_id', 'id');
    }
}
