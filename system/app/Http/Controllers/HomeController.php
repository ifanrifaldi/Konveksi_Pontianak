<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function beranda(){
        return view('frontview.beranda');
    }

    function visimisi(){
        return view('frontview.visimisi');
    }
    function struktur(){
        return view('frontview.struktur');
    }
    function bisnis(){
        return view('frontview.bisnis');
    }

}