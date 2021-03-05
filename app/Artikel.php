<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table='artikel';

    protected $fillable=[
        'judul','isi','users_id','kategori_artikel_id'
    ];

    public function kategoriArtikel(){
        return $this->belongsTo(\App\kategoriArtikel::class, 'Kategori_artikel_id','id');
    }

    public function User(){
        return $this->belongsTo(\App\User::class, 'users_id','id');
    }
    
}