<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\JenisProduk;
use App\Models\Produk;

class HomeController extends Controller
{   
    public function beranda(){
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.beranda', $data);
    }
// Profil
    function visimisi(){
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.profil.visimisi', $data);
    }
    function struktur(){
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.profil.team', $data);
    }
// Blog
    function blog(){
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.blog.blog', $data);
    }
    function blogdetail(){
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.blog.blogdetail', $data);
    }
// Berita
    function berita(){
        $data['list_berita'] = Berita::all();
        $data['list_jenis_produk'] = JenisProduk::all();

        return view('frontend.berita.berita',$data);
    }
    function beritadetail(Berita $berita){
        $data['berita'] = $berita;
        $data['list_jenis_produk'] = JenisProduk::all();

        return view('frontend.berita.beritadetail', $data);
    }
// Produk

    public function show($jenis_produk)
    {
        $data['jenis_produk'] = JenisProduk::find($jenis_produk);
        $data['list_produk'] = Produk::where('id_jenis_produk', $jenis_produk)->get();
        $data['list_jenis_produk'] = JenisProduk::all();

        return view('frontend.produk.show', $data);
    }

// Cara Order
    function caraorder(){
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.caraorder', $data);
    }
// Cara Order
    function galery(){
        $data['list_produk'] = Produk::all();
        $data['list_galeri'] = Galeri::all();
        $data['list_jenis_produk'] = JenisProduk::all();
        return view('frontend.galery', $data);
    }

    // function bisnis(){
    //     return view('frontend.bisnis');
    // }

}