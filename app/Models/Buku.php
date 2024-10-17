<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Buku extends Model
{
    // use HasFactory;
    use softDeletes;

    protected $table = 'buku';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',  
    ]; 

    protected $fillable = [
        'kategori_id',
        'prodi_id',
        'judul',
        'tahun',
        'penulis',
        'penerbit',
        'jumlah',
        'deskripsi',
        'foto',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'kategori_id', 'id');
    }

    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi', 'prodi_id', 'id');
    }



}
