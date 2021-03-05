<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Artikel;

class BabSatuController extends Controller
{
    //Soal1
    //Tampilkan artikel dengan id =17 dan users_id=160
    public function a1(){
        $artikels=Artikel::where('id',1)->where('users_id',1)->get();

        return $artikels;
    }

    //Soal2
    //Tampilkan artikel dengan id =2 atau id=5
    public function a2(){
        $artikels=Artikel::where('id',2)->orWhere('id',3)->get();
        return $artikels;
    }

    //soal3
    //Tampilkan artikel dengan id =3 dan user dengan nama =Aslijan Metgantara
    public function a3() {
        $artikels=Artikel::where('id',1)->whereHas('user', function ($query){
            $query->where('name', 'Banawa Sihombing');
        })->with('user')->get();

        return $artikels;
    }
    //Soal4
    //Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri id =269
    public function a4(){
        $pengumuman=Pengumuman::whereHas('user', function($query){
            $query->whereHas('galeri', function($query){
                $query->where('id', 2);
            });
        })->with('user.galeri')->get();
        return $pengumuman;
    }
}
