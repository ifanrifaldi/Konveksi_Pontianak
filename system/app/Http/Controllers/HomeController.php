<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function beranda(){
        return view('frontview.beranda');
    }

    function visimisi(){
        return view('frontview.profil.visimisi');
    }
    function struktur(){
        return view('frontview.profil.team');
    }

    function blog(){
        return view('frontview.blog.blog');
    }
    function blogdetail(){
        return view('frontview.blog.blogdetail');
    }
    // function bisnis(){
    //     return view('frontview.bisnis');
    // }

}