<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;

class HomeController extends Controller
{   
    public function beranda(){
        return view('frontend.beranda');
    }
// Profil
    function visimisi(){
        return view('frontend.profil.visimisi');
    }
    function struktur(){
        return view('frontend.profil.team');
    }
// Blog
    function blog(){
        return view('frontend.blog.blog');
    }
    function blogdetail(){
        return view('frontend.blog.blogdetail');
    }
// Berita
    function berita(){
        $data['list_berita'] = Berita::all();
        return view('frontend.berita.berita',$data);
    }
    function beritadetail(Berita $berita){
        $data['berita'] = $berita;
        return view('frontend.berita.beritadetail', $data);
    }
// Produk
    // Kemeja
    function kemeja(){
        return view('frontend.produk.kemeja');
    }
    // Kaos
    function kaos(){
        return view('frontend.produk.kaos');
    }
    // jaket
    function jaket(){
        return view('frontend.produk.jaket');
    }

// Cara Order
    function caraorder(){
        return view('frontend.caraorder');
    }
// Cara Order
    function galery(){
        return view('frontend.galery');
    }

    // function bisnis(){
    //     return view('frontend.bisnis');
    // }

}