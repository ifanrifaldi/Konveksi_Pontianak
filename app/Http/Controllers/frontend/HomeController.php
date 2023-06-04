<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\GaleriGaleri;
use App\Models\GaleriProduk;
use App\Models\JenisProduk;
use App\Models\Produk;

use App\Models\Komentar;
use App\Models\Mitra;

class HomeController extends Controller
{   
    public function beranda(){
        $data['list_mitra'] = Mitra::all();
        $data['list_berita'] = Berita::orderBy('id','desc')->take(1)->get();
        $data['list_galeri'] = Galeri::orderBy('id','desc')->take(3)->get();
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.beranda', $data);
    }
// Profil
    function profil(){
        $data['list_mitra'] = Mitra::all();
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.profil.profil', $data);
    }
    
// Blog
    function blog(){
        $data['list_mitra'] = Mitra::all();
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.blog.blog', $data);
    }
    function blogdetail(){
        $data['list_mitra'] = Mitra::all();
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.blog.blogdetail', $data);
    }
// Berita
    function berita(){
        $data['list_mitra'] = Mitra::all();
        $data['list_berita'] = Berita::all();
        $data['list_jenis_produk'] = JenisProduk::all();

        return view('frontend.berita.berita',$data);
    }
    function beritadetail(Berita $berita){
        $data['list_mitra'] = Mitra::all();
        $data['berita'] = $berita;
        $data['list_jenis_produk'] = JenisProduk::all();

        return view('frontend.berita.beritadetail', $data);
    }
// Produk

    public function show($jenis_produk)
    {
        $data['list_mitra'] = Mitra::all();
        $data['jenis_produk'] = JenisProduk::find($jenis_produk);
        $data['list_produk'] = Produk::where('id_jenis_produk', $jenis_produk)->get();
        $data['list_jenis_produk'] = JenisProduk::all();

        $data['list_galeri_produk'] = GaleriProduk::all();

        return view('frontend.produk.show', $data);
    }

// Cara Order
    function caraorder(){
        $data['list_mitra'] = Mitra::all();
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.caraorder', $data);
    }
// Cara Order
    function galery(){
        $data['list_mitra'] = Mitra::all();
        $data['list_produk'] = Produk::all();
        $data['list_galeri'] = Galeri::all();
        $data['list_galeri_galeri'] = GaleriGaleri::all();
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.galery', $data);
    }

    public function komen()
    {
        $komentar = New Komentar();
        $komentar->id_berita = request('id_berita');
        $komentar->nama_pengirim = request('nama_pengirim');
        $komentar->email_pengirim = request('email_pengirim');
        $komentar->text = request('text');
        $komentar->send = 1;
        
        $komentar->save();

        return back();
    }

}