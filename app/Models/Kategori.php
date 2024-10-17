<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    // use HasFactory;
    use softDeletes;

    protected $table = 'kategori';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_kategori',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    public function buku()
    {
        return $this->hasMany('App\Models\Buku', 'kategori_id');
    }


}
