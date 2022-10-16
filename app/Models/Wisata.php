<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'provinsi',
        'kabupaten',
        'slug',
        'gambar',

        'deskripsi'
    ];

    public function kabupaten()
    {
        return $this->belongsTo('App\Models\Regency', 'kabupaten');
    }
}
