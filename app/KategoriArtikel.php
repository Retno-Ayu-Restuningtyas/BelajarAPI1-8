<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriArtikel extends Model
{
    use HasFactory;
    protected $table='kategori_artikel';

    protected $fillable=[
        'isi','users_id'
    ];

    public function artikels(){
        return $this->belongsTo(\App\Artikel::class, 'Kategori_artikel_id','id');
    }

    public function artikel(){
        return $this->belongsTo(\App\Artikel::class, 'user_id','id');
    }
}