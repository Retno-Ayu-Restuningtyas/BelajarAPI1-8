<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabDuaController extends Controller
{
    //Soal5
    //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri dengan nama kategori galeri yang di awali dengan Aut
    public function a5(){
    $pengumuman=Pengumuman::whereHas('user', function($query){
        $query->whereHas('galeri', function($query){
          $query->whereHas('KategoriGaleri', function($query){
            $query->where('nama', 'like', 'Aut%', );
        });
        });
    })->with('user.galeri.KategoriGaleri')->get();
    return $pengumuman;
}

    //Soal6
    //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dan juga membuat berita
    public function a6(){
        $pengumuman=Pengumuman::whereHas('user', function($query){
            $query->whereHas('galeri')->whereHas('berita');
            })->get();

        return $pengumuman;
        }
    }