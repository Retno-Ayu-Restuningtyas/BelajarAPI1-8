<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthAPIController@login');
    Route::post('logout', 'App\Http\Controllers\AuthAPIController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthAPIController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthAPIController@me');

});

//Artikel
Route::apiresource('artikel', App\Http\Controllers\artikelAPIController::class);
Route::apiresource('kategori_artikel', App\Http\Controllers\kategoriartikelAPIController::class);

//Berita
Route::apiresource('berita', App\Http\Controllers\BeritaAPIController::class);
Route::apiresource('kategori_berita', App\Http\Controllers\KategoriBeritaAPIController::class);

//Pengumuman
Route::apiresource('pengumuman', App\Http\Controllers\PengumumanAPIController::class);
Route::apiresource('kategori_pengumuman', App\Http\Controllers\KategoriPengumumanAPIController::class);

//Galeri
Route::apiresource('galeri', App\Http\Controllers\GaleriAPIController::class);
Route::apiresource('kategori_galeri', App\Http\Controllers\KategoriGaleriAPIController::class);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Soal1
//Tampilkan artikel dengan id =17 dan users_id=160
Route::get('soal1','App\Http\Controllers\BabSatuController@a1');

//Soal2
//Tampilkan artikel dengan id =2 atau id=5
Route::get('soal2','App\Http\Controllers\BabSatuController@a2');

//Soal3
//Tampilkan artikel dengan id =3 dan user dengan nama =Aslijan Metgantara
Route::post('soal3','App\Http\Controllers\BabSatuController@a3');

//Soal4
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri id =269
Route::post('soal4','App\Http\Controllers\BabSatuController@a4');

//Soal5
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dengan galeri dengan nama kategori galeri yang di awali dengan Aut
Route::put('soal5','App\Http\Controllers\BabDuaController@a5');

//Soal6
//Tampilkan pengumuman yang dibuat oleh user yang membuat galeri dan juga membuat berita
Route::patch('soal6','App\Http\Controllers\BabDuaController@a6');

//Soal7
//Tampilkan pengumuman yang dibuat oleh user yang membuat 2 berita atau lebih
Route::delete('soal7','App\Http\Controllers\BabDuaController@a7');

