<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function beranda(){
        return view('frontview.beranda');
    }
// Profil
    function visimisi(){
        return view('frontview.profil.visimisi');
    }
    function struktur(){
        return view('frontview.profil.team');
    }
// Blog
    function blog(){
        return view('frontview.blog.blog');
    }
    function blogdetail(){
        return view('frontview.blog.blogdetail');
    }
// Produk
    // Kemeja
    function kemeja(){
        return view('frontview.produk.kemeja');
    }
    // Kaos
    function kaos(){
        return view('frontview.produk.kaos');
    }
    // jaket
    function jaket(){
        return view('frontview.produk.jaket');
    }
    // Cara Order
    function caraorder(){
        return view('frontview.produk.caraorder');
    }

    // function bisnis(){
    //     return view('frontview.bisnis');
    // }

}